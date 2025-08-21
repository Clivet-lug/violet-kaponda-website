<?php

return [
    /*
    |--------------------------------------------------------------------------
    | YouTube Channel Configuration
    |--------------------------------------------------------------------------
    */
    'channel_id' => env('YOUTUBE_CHANNEL_ID', 'UCbRZUgvozi2nSxya6eyzrUA'),
    'channel_handle' => env('YOUTUBE_CHANNEL_HANDLE', '@elevate-and-dominat'),
    'channel_url' => env('YOUTUBE_CHANNEL_URL', 'https://youtube.com/@elevate-and-dominat'),

    /*
    |--------------------------------------------------------------------------
    | Cache Settings
    |--------------------------------------------------------------------------
    */
    'cache_duration' => env('YOUTUBE_CACHE_DURATION', 900), // 15 minutes
    'stats_cache_duration' => env('YOUTUBE_STATS_CACHE_DURATION', 1800), // 30 minutes

    /*
    |--------------------------------------------------------------------------
    | Update Schedule
    |--------------------------------------------------------------------------
    */
    'update_frequency' => env('YOUTUBE_UPDATE_FREQUENCY', 15), // minutes
    'force_update_times' => ['06:00', '18:00'], // Daily force updates

    /*
    |--------------------------------------------------------------------------
    | Featured Episodes (Manual Override)
    |--------------------------------------------------------------------------
    */
    'featured_episodes' => [
        [
            'id' => 'xtmlZ5w70uE',
            'title' => 'Audacity Series Ep 1 #audacity',
            'description' => 'Building unshakeable self-belief and confidence to pursue your biggest dreams in the tech industry.',
            'episode_number' => 'EP 01',
            'series' => 'AUDACITY SERIES',
            'duration' => '3:12',
            'views' => '64 views',
            'published_ago' => '13 days ago',
            'url' => 'https://youtu.be/xtmlZ5w70uE',
            'category' => 'The Audacity Series',
        ],
        [
            'id' => 'MEXn-Gy0QQc',
            'title' => 'Audacity Series Ep 2 #audacity',
            'description' => 'How is your past trauma stopping you from showing up as your authentic self? Breaking cycles that keep you small.',
            'episode_number' => 'EP 02',
            'series' => 'AUDACITY SERIES',
            'duration' => '7:54',
            'views' => '25 views',
            'published_ago' => '5 days ago',
            'url' => 'https://youtu.be/MEXn-Gy0QQc',
            'category' => 'Mindset Transformation',
        ],
    ],
];
