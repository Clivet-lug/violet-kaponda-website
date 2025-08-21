<?php

namespace App\Http\Controllers;

use App\Services\YouTubeRSSService;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    private $youtubeService;

    public function __construct(YouTubeRSSService $youtubeService)
    {
        $this->youtubeService = $youtubeService;
    }

    /**
     * Display the media page with YouTube data
     */
    public function index()
    {
        $data = [
            'latest_videos' => $this->youtubeService->getLatestVideos(3),
            'featured_episodes' => $this->youtubeService->getFeaturedEpisodes(),
            'channel_stats' => $this->youtubeService->getChannelStats(),
            'page_title' => 'Violet Kaponda Media - Elevate & Dominate Video Series | African Fintech Queen',
            'page_description' => 'Watch Violet Nswana Kaponda\'s Elevate & Dominate video series. Get insights on fintech, mindset, wellness, and building limitless careers in Africa\'s tech ecosystem.',
        ];

        // Updated to use the correct view path
        return view('pages.media', $data);
    }

    /**
     * API endpoint for real-time YouTube data updates
     */
    public function getYouTubeData(Request $request)
    {
        $type = $request->get('type', 'all');

        switch ($type) {
            case 'stats':
                return response()->json([
                    'success' => true,
                    'data' => $this->youtubeService->getChannelStats()
                ]);

            case 'latest':
                return response()->json([
                    'success' => true,
                    'data' => $this->youtubeService->getLatestVideos(5)
                ]);

            case 'featured':
                return response()->json([
                    'success' => true,
                    'data' => $this->youtubeService->getFeaturedEpisodes()
                ]);

            default:
                return response()->json([
                    'success' => true,
                    'data' => [
                        'latest_videos' => $this->youtubeService->getLatestVideos(3),
                        'featured_episodes' => $this->youtubeService->getFeaturedEpisodes(),
                        'channel_stats' => $this->youtubeService->getChannelStats(),
                    ]
                ]);
        }
    }

    /**
     * Refresh YouTube cache manually
     */
    public function refreshYouTubeData()
    {
        $this->youtubeService->clearCache();

        return response()->json([
            'success' => true,
            'message' => 'YouTube data cache cleared and will refresh on next request'
        ]);
    }
}
