<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class YouTubeRSSService
{
    private $channelId = 'UCbRZUgvozi2nSxya6eyzrUA';
    private $rssUrl;

    public function __construct()
    {
        $this->rssUrl = "https://www.youtube.com/feeds/videos.xml?channel_id={$this->channelId}";
    }

    /**
     * Get latest videos from YouTube RSS feed
     */
    public function getLatestVideos($limit = 15)
    {
        return Cache::remember('youtube_latest_videos', 900, function () use ($limit) {
            try {
                $response = Http::timeout(30)
                    ->withHeaders([
                        'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36'
                    ])
                    ->get($this->rssUrl);

                if ($response->successful()) {
                    // Register namespaces before parsing
                    $xml = simplexml_load_string($response->body());

                    if ($xml === false) {
                        Log::error('YouTube RSS: XML parsing failed');
                        return $this->getFallbackData();
                    }

                    // Register namespaces
                    $xml->registerXPathNamespace('atom', 'http://www.w3.org/2005/Atom');
                    $xml->registerXPathNamespace('media', 'http://search.yahoo.com/mrss/');
                    $xml->registerXPathNamespace('yt', 'http://www.youtube.com/xml/schemas/2015');

                    $entries = $xml->entry;

                    if (!$entries || count($entries) === 0) {
                        Log::warning('YouTube RSS: No entries found in feed');
                        return $this->getFallbackData();
                    }

                    $videos = [];

                    foreach ($entries as $index => $entry) {
                        if ($index >= $limit) break;

                        $videoId = $this->extractVideoId((string)$entry->id);
                        $publishedDate = new \DateTime((string)$entry->published);
                        $updatedDate = new \DateTime((string)$entry->updated);

                        $videos[] = [
                            'id' => $videoId,
                            'title' => (string)$entry->title,
                            'description' => (string)$entry->{'media:group'}->{'media:description'},
                            'published' => $publishedDate->format('Y-m-d H:i:s'),
                            'updated' => $updatedDate->format('Y-m-d H:i:s'),
                            'published_ago' => $this->timeAgo($publishedDate),
                            'thumbnail' => $this->getThumbnailUrl($videoId),
                            'thumbnail_high' => $this->getThumbnailUrl($videoId, 'maxresdefault'),
                            'url' => "https://www.youtube.com/watch?v={$videoId}",
                            'embed_url' => "https://www.youtube.com/embed/{$videoId}",
                            'channel_title' => (string)$entry->author->name,
                            'duration' => $this->estimateDuration((string)$entry->title),
                            'category' => $this->categorizeVideo((string)$entry->title),
                            'episode_number' => $this->extractEpisodeNumber((string)$entry->title),
                            'series' => $this->extractSeries((string)$entry->title),
                        ];
                    }

                    Log::info('YouTube RSS: Successfully fetched ' . count($videos) . ' videos');
                    return $videos;
                }

                Log::error('YouTube RSS: HTTP request failed with status ' . $response->status());
            } catch (\Exception $e) {
                Log::error('YouTube RSS fetch failed: ' . $e->getMessage());
                Log::error('Stack trace: ' . $e->getTraceAsString());
            }

            return $this->getFallbackData();
        });
    }

    /**
     * Get channel statistics
     */
    public function getChannelStats()
    {
        $videos = $this->getLatestVideos(50);
        return [
            'subscriber_count' => '206+',
            'video_count' => count($videos),
            'channel_title' => 'Elevate and Dominate',
            'channel_url' => 'https://youtube.com/@elevate-and-dominat',
            'total_videos' => count($videos),
        ];
    }

    /**
     * Get Audacity Series episodes specifically
     */
    public function getAudacitySeriesEpisodes()
    {
        $allVideos = $this->getLatestVideos(20);
        $audacityEpisodes = [];

        foreach ($allVideos as $video) {
            if (stripos($video['title'], 'audacity') !== false) {
                $audacityEpisodes[] = $video;
            }
        }

        return $audacityEpisodes;
    }

    /**
     * Get featured episodes (mix of recent and popular)
     */
    public function getFeaturedEpisodes()
    {
        $allVideos = $this->getLatestVideos(15);

        // Return all videos as featured episodes
        return array_slice($allVideos, 0, 6);
    }

    /**
     * Get video thumbnail URL
     */
    private function getThumbnailUrl($videoId, $quality = 'hqdefault')
    {
        // Available qualities: default, mqdefault, hqdefault, sddefault, maxresdefault
        return "https://img.youtube.com/vi/{$videoId}/{$quality}.jpg";
    }

    /**
     * Extract video ID from YouTube RSS entry ID
     */
    private function extractVideoId($entryId)
    {
        return str_replace('yt:video:', '', $entryId);
    }

    /**
     * Calculate time ago from date
     */
    private function timeAgo(\DateTime $date)
    {
        $now = new \DateTime();
        $diff = $now->diff($date);

        if ($diff->days > 365) {
            $years = floor($diff->days / 365);
            return $years . ' year' . ($years > 1 ? 's' : '') . ' ago';
        } elseif ($diff->days > 30) {
            $months = floor($diff->days / 30);
            return $months . ' month' . ($months > 1 ? 's' : '') . ' ago';
        } elseif ($diff->days > 0) {
            return $diff->days . ' day' . ($diff->days > 1 ? 's' : '') . ' ago';
        } elseif ($diff->h > 0) {
            return $diff->h . ' hour' . ($diff->h > 1 ? 's' : '') . ' ago';
        } else {
            return $diff->i . ' minute' . ($diff->i > 1 ? 's' : '') . ' ago';
        }
    }

    /**
     * Estimate duration from title (since RSS doesn't provide duration)
     */
    private function estimateDuration($title)
    {
        // Try to extract duration from title if present
        if (preg_match('/(\d+):(\d+)/', $title, $matches)) {
            return $matches[0];
        }

        // Default estimates based on content type
        if (stripos($title, 'audacity') !== false) return '3:12';
        if (stripos($title, 'law of attraction') !== false) return '22:32';
        if (stripos($title, 'self love') !== false) return '21:19';
        if (stripos($title, 'plan with me') !== false) return '15:55';
        if (stripos($title, 'trauma') !== false) return '7:54';
        if (stripos($title, 'sabotage') !== false) return '15:31';

        return '5:00'; // Default
    }

    /**
     * Categorize video based on title
     */
    private function categorizeVideo($title)
    {
        if (stripos($title, 'audacity') !== false) return 'The Audacity Series';
        if (stripos($title, 'trauma') !== false) return 'Mindset Transformation';
        if (stripos($title, 'self love') !== false) return 'Personal Development';
        if (stripos($title, 'law of attraction') !== false) return 'Manifestation';
        if (stripos($title, 'plan with me') !== false) return 'Planning & Goals';
        if (stripos($title, 'sabotage') !== false) return 'Self Development';

        return 'Empowerment';
    }

    /**
     * Extract episode number from title
     */
    private function extractEpisodeNumber($title)
    {
        if (preg_match('/ep\s*(\d+)/i', $title, $matches)) {
            return 'EP ' . sprintf('%02d', $matches[1]);
        }
        return null;
    }

    /**
     * Extract series name from title
     */
    private function extractSeries($title)
    {
        if (stripos($title, 'audacity') !== false) return 'AUDACITY SERIES';
        return 'ELEVATE & DOMINATE';
    }

    /**
     * Fallback data when RSS fails
     */
    private function getFallbackData()
    {
        return [
            [
                'id' => 'xtmlZ5w70uE',
                'title' => 'Audacity Series Ep 1 #audacity',
                'description' => 'Building unshakeable self-belief and confidence to pursue your biggest dreams in the tech industry.',
                'published_ago' => '2 weeks ago',
                'thumbnail' => 'https://img.youtube.com/vi/xtmlZ5w70uE/hqdefault.jpg',
                'thumbnail_high' => 'https://img.youtube.com/vi/xtmlZ5w70uE/maxresdefault.jpg',
                'url' => 'https://youtu.be/xtmlZ5w70uE',
                'embed_url' => 'https://www.youtube.com/embed/xtmlZ5w70uE',
                'duration' => '3:12',
                'category' => 'The Audacity Series',
                'episode_number' => 'EP 01',
                'series' => 'AUDACITY SERIES',
            ],
            [
                'id' => 'MEXn-Gy0QQc',
                'title' => 'How is your past trauma stopping you from showing up as your...',
                'description' => 'Breaking cycles that keep you small and stepping into your authentic self.',
                'published_ago' => '6 days ago',
                'thumbnail' => 'https://img.youtube.com/vi/MEXn-Gy0QQc/hqdefault.jpg',
                'thumbnail_high' => 'https://img.youtube.com/vi/MEXn-Gy0QQc/maxresdefault.jpg',
                'url' => 'https://youtu.be/MEXn-Gy0QQc',
                'embed_url' => 'https://www.youtube.com/embed/MEXn-Gy0QQc',
                'duration' => '7:54',
                'category' => 'Mindset Transformation',
                'episode_number' => 'EP 02',
                'series' => 'AUDACITY SERIES',
            ],
        ];
    }

    /**
     * Clear YouTube cache
     */
    public function clearCache()
    {
        Cache::forget('youtube_latest_videos');
    }
}
