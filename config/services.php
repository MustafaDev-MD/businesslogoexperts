<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'postmark' => [
        'key' => env('POSTMARK_API_KEY'),
    ],

    'resend' => [
        'key' => env('RESEND_API_KEY'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],

    [
        'name' => 'Branding ',
        'slug' => 'branding ',
    ],
    [
        'name' => 'Web Development ',
        'slug' => 'web-development ',
    ],
    [
        'name' => 'App Development',
        'slug' => 'app-development',
    ],
    [
        'name' => 'Animation',
        'slug' => 'animation',
    ],
    [
        'name' => 'AI Agents',
        'slug' => 'ai-agents',
    ],
    [
        'name' => 'SEO',
        'slug' => 'seo',
    ],
    [
        'name' => 'Social Media',
        'slug' => 'social-media',
    ],

    // [
    //     'name' => 'Branding',
    //     'slug' => 'branding',
    //     'description' => 'Boost Your Brand with Strategic Marketing',
    //     'overview' => 'We help brands grow through custom-tailored marketing strategies.',
    //     'tagline' => 'Branding & Identity',
    //     'included' => ['Platform Strategy & Planning', 'Creative Content Production', 'Paid Ads Management'],
    //     'images' => [
    //         asset('assets/image/dummy-img-600x400.jpg'),
    //         asset('assets/image/dummy-img-600x400.jpg')
    //     ],
    //     'cta' => 'Take your brand to the next level!',
    //     'faqs' => [
    //         ['question' => 'What services are included?', 'answer' => 'We specialize in digital marketing, including branding, social media management, content strategy, paid ads, and analytics-driven campaigns.'],
    //         ['question' => 'How long to see results?', 'answer' => 'We specialize in digital marketing, including branding, social media management, content strategy, paid ads, and analytics-driven campaigns.'],
    //     ],
    // ],

    // [
    //     'name' => 'Web Development',
    //     'slug' => 'web-development',
    //     'description' => 'Custom Websites & Apps for Your Business',
    //     'overview' => 'We build websites that convert visitors into customers.',
    //     'tagline' => 'Web & App Solutions',
    //     'included' => ['Frontend Development', 'Backend Development', 'SEO Optimization'],
    //     'images' => [
    //         asset('assets/image/dummy-img-600x400.jpg')
    //     ],
    //     'cta' => 'Get your custom website today!',
    //     'faqs' => [
    //         ['question' => 'Do you do eCommerce?', 'answer' => 'Yes, we develop online stores with full functionality.']
    //     ],
    // ],

];
