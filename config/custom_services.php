<?php

return [

    // [
    //     'name' => 'Branding ',
    //     'slug' => 'branding ',
    // ],
    // [
    //     'name' => 'Web Development ',
    //     'slug' => 'web-development ',
    // ],
    // [
    //     'name' => 'App Development',
    //     'slug' => 'app-development',
    // ],
    // [
    //     'name' => 'Animation',
    //     'slug' => 'animation',
    // ],
    // [
    //     'name' => 'AI Agents',
    //     'slug' => 'ai-agents',
    // ],
    // [
    //     'name' => 'SEO',
    //     'slug' => 'seo',
    // ],
    // [
    //     'name' => 'Social Media',
    //     'slug' => 'social-media',
    // ],

    [
        'name' => 'Branding',
        'slug' => 'branding',
        'parent' => 'Services',
        'parentLink' => 'services',
        'breadcrumb' => 'Branding & Identity',

        'title' => 'Branding',
        'description' => 'Boost Your Brand with Strategic Marketing',

        'bannerImage' => 'assets/image/dummy-img-600x400.jpg',
        'bannerAlt' => 'Branding Banner',
        'expertiseTitle' => 'Make your first impression a repeatable advantage.',
        'expertiseDescription' => 'Branding & Identity at Business Logo Experts is a systems-first practice: we design logos and build the rules, assets, and messaging that let a brand scale without losing its spark. Every choice — color, type, tone, motion — is selected to improve recognition, reduce friction, and move business outcomes. We balance creative craft with engineering rigor so your identity becomes an asset that helps you attract attention, earn trust, and convert faster.',
        'images' => [
            'assets/image/dummy-img-600x400.jpg',
            'assets/image/dummy-img-600x400.jpg',
            'assets/image/dummy-img-600x400.jpg',
            'assets/image/dummy-img-600x400.jpg'
        ],

        'portfolioImages' => [
            'Logo' => [
                'assets/image/dummy-img-600x400.jpg',
                'assets/image/dummy-img-600x400.jpg',
                'assets/image/dummy-img-600x400.jpg',
            ],
            'Systems' => [
                'assets/image/dummy-img-600x400.jpg',
                'assets/image/dummy-img-600x400.jpg',
            ],
            'Assets' => [
                'assets/image/dummy-img-600x400.jpg',
                'assets/image/dummy-img-600x400.jpg',
            ],
            'Print' => [
                'assets/image/dummy-img-600x400.jpg',
                'assets/image/dummy-img-600x400.jpg',
            ],
            'Rebrand' => [
                'assets/image/dummy-img-600x400.jpg',
                'assets/image/dummy-img-600x400.jpg',
            ]
        ],
        'portfolioContent' => [
            'Logo' => 'Distinctive primary marks, compact monograms, and flexible lockups built to work from favicon to billboard — crafted to improve recognition and recall.',
            'Systems' => 'Comprehensive style guides and component libraries plus voice & messaging pillars and naming frameworks — so every touchpoint stays consistent and strategic.',
            'Assets' => 'Ready-to-use visual packs: social templates, presentation decks, icon sets, illustration direction, and motion tokens that speed execution and maintain brand quality.',
            'Print' => 'Business cards, stationery, brochures, packaging, and printable templates designed for physical clarity and tangible brand impact.',
            'Rebrand' => 'Strategic audits, phased refreshes, rollout plans, and governance to preserve equity while sharpening positioning and accelerating growth.',
        ],

        'includedPara' => 'Complete handover that gets you publishing, selling, and scaling faster.',
        'included_1' => [
            'Brand strategy brief (audience, positioning, competitive audit)',
            'Primary logo, secondary marks, favicon, and lockups',
            'Color palette, typography system, and accessibility guidance',
            'Icon set, illustration direction, and photography guidance',
            'Voice guide: elevator pitch, messaging pillars, and microcopy examples'
        ],
        'included_2' => [
            'Component library: templates for social, email, and presentations',
            'Motion tokens and simple animation rules (where applicable)',
            'Paid Ads ManagementExported source files (SVG, EPS, PNG) and editable source package',
            '30 days post-handover support and implementation checklist',
        ],

        'pricing' => [
            'title' => "Let's Find the Right Strategy for You!",
            'plans' => [
                [
                    'name' => 'Starter',
                    'description' => 'Perfect for startups & small businesses',
                    'price' => '1,999',
                    'highlight' => false,
                    'features' => ['Basic SEO & Marketing', 'Social Media Management (1 Platform)', 'Monthly Performance Report']
                ],
                [
                    'name' => 'Growth ',
                    'description' => 'Full scale marketing for maximum impact',
                    'price' => '7,500',
                    'highlight' => true,
                    'features' => ['Complete Digital Marketing Suite', 'Paid Ads Management', 'Dedicated Account Manager', 'Email Marketing & Automation', 'Weekly Performance insights'],
                    'coreBenefits' => [
                        ['icon' => 'fa-brain', 'text' => 'Dedicated Account Manager'],
                        ['icon' => 'fa-accessible-icon', 'text' => 'Priority Support 24/7', 'brand' => true],
                        ['icon' => 'fa-bug', 'text' => 'Customized Growth Strength']
                    ]
                ]
            ]
        ],

        'whyChooseUs' => [
            'Brand-first, outcome-driven',
            'End-to-end systems',
            'Design + data',
            'Future-ready',
            'Transparent process',
            'Dedicated support'
        ],
        
        'rightBlogTitle' => 'Featured article — How to turn a logo into a growth engine',
        'rightBlogDes' => 'A logo should do more than look good — it should guide product choices and reduce buyer friction. We break down three tests to make sure your identity works at scale.',

        'testimonials' => [
            [
                'name' => 'Emma Richard',
                'position' => 'CEO, Nexatech',
                'description' => '“Business Logo Experts turned our fragmented assets into a focused system. The new identity improved stakeholder confidence and helped us close enterprise deals faster.”',
                'result' => '(Result: +18% enterprise conversion)',
                'image' => 'assets/image/dummy-img-400x400.jpg',
                'stars' => 5,
            ],
            [
                'name' => 'David Mont',
                'position' => 'Marketing Director, StudioPlus',
                'description' => '“The visual language made our messaging clearer across channels. Templates saved our team hours each week and improved campaign consistency.”',
                'result' => '(Result: reduced time-to-publish by 40%)',
                'image' => 'assets/image/dummy-img-400x400.jpg',
                'stars' => 5,
            ],
            [
                'name' => 'Sophia Lewis',
                'position' => 'Founder, Lumen Studio',
                'description' => '“From naming to motion, the process was strategic and fast. The new logo and pitch assets helped us win a major partnership during launch.”',
                'result' => 'secured one major partnership in launch quarter',
                'image' => 'assets/image/dummy-img-400x400.jpg',
                'stars' => 5,
            ],
            [
                'name' => 'Emma Richard',
                'position' => 'CEO, Nexatech',
                'description' => '“Business Logo Experts turned our fragmented assets into a focused system. The new identity improved stakeholder confidence and helped us close enterprise deals faster.”',
                'result' => '+18% enterprise conversion',
                'image' => 'assets/image/dummy-img-400x400.jpg',
                'stars' => 5,
            ],
            [
                'name' => 'David Mont',
                'position' => 'Marketing Director, StudioPlus',
                'description' => '“The visual language made our messaging clearer across channels. Templates saved our team hours each week and improved campaign consistency.”',
                'result' => '(Result: reduced time-to-publish by 40%)',
                'image' => 'assets/image/dummy-img-400x400.jpg',
                'stars' => 5,
            ],
            [
                'name' => 'Sophia Lewis',
                'position' => 'Founder, Lumen Studio',
                'description' => '“From naming to motion, the process was strategic and fast. The new logo and pitch assets helped us win a major partnership during launch.”',
                'result' => 'secured one major partnership in launch quarter',
                'image' => 'assets/image/dummy-img-400x400.jpg',
                'stars' => 5,
            ],
        ],
        'testimonialSummary' => [
            'avatars' => [
                'assets/image/dummy-img-400x400.jpg',
                'assets/image/dummy-img-400x400.jpg',
                'assets/image/dummy-img-400x400.jpg',
                'assets/image/dummy-img-400x400.jpg',
            ],
            'positiveReviews' => '1,200+ brand',
            'reviewLabel' => 'systems delivered',

            'stats' => [
                [
                    'value' => +24,
                    'suffix' => '%',
                    'label' => 'lift in brand recall within 3 months',
                ],
                [
                    'value' => 87,
                    'suffix' => '%',
                    'label' => 'year-over-year',
                ],
            ],

            'services' => [
                'Social Media Growth',
                'Performance Marketing',
            ]
        ],

        'faqs' => [
            [
                'question' => 'How long does a typical identity project take?', 
                'answer' => 'Scope dependent — a focused logo + basics package takes 3–4 weeks. Full brand systems commonly take 6–12 weeks.'
            ],
            [
                'question' => 'Will I own the files and IP?', 
                'answer' => 'Yes. You receive source files and full IP assignment on final payment, plus usage guidance.'
            ],
            [
                'question' => 'Can you work with existing design systems?', 
                'answer' => 'Yes — we audit current assets and either extend the system or propose a phased refresh to preserve equity and speed implementation.'
            ],
            [
                'question' => 'What deliverables will I get at handover?', 
                'answer' => 'Source files (SVG, EPS, layered files), a style guide PDF, component templates, and an implementation checklist.'
            ],
            [
                'question' => 'Do you offer post-launch support?', 
                'answer' => 'Yes — 30 days included. Retainers and implementation services available as add-ons.'
            ],
            [
                'question' => 'How do you measure success for branding work?', 
                'answer' => 'We use qualitative and quantitative signals: brand recall studies, time-to-publish for marketing assets, conversion lift on launch pages, and client-specific KPIs set during discovery.'
            ],
        ],
    ],

    [
        'name' => 'Website Development',
        'slug' => 'website-development',
        'parent' => 'Services',
        'parentLink' => 'services',
        'breadcrumb' => 'Website Development',

        'title' => 'Website Development',
        'description' => 'Website Development',

        'bannerImage' => 'assets/image/dummy-img-600x400.jpg',
        'bannerAlt' => 'Branding Banner',
        'expertiseTitle' => 'Make your digital presence a conversion engine.',
        'expertiseDescription' => 'Website Development at Business Logo Experts combines product thinking, crisp UX, and robust engineering to deliver sites and web applications that look polished and perform under real-world load. Whether you need a high-converting marketing site, an e-commerce store, or a custom web app, we prototype quickly, validate with metrics, then build for speed, accessibility, and maintainability — so your site is not just launched, it launches results.',
        'images' => [
            'assets/image/dummy-img-600x400.jpg',
            'assets/image/dummy-img-600x400.jpg',
            'assets/image/dummy-img-600x400.jpg',
            'assets/image/dummy-img-600x400.jpg'
        ],

        'portfolioImages' => [
            'Sites' => [
                'assets/image/dummy-img-600x400.jpg',
                'assets/image/dummy-img-600x400.jpg',
                'assets/image/dummy-img-600x400.jpg',
            ],
            'Commerce' => [
                'assets/image/dummy-img-600x400.jpg',
                'assets/image/dummy-img-600x400.jpg',
            ],
            'Webapps' => [
                'assets/image/dummy-img-600x400.jpg',
                'assets/image/dummy-img-600x400.jpg',
            ],
            'CMS' => [
                'assets/image/dummy-img-600x400.jpg',
                'assets/image/dummy-img-600x400.jpg',
            ],
            'Integrate' => [
                'assets/image/dummy-img-600x400.jpg',
                'assets/image/dummy-img-600x400.jpg',
            ]
        ],
        'portfolioContent' => [
            'Sites' => 'Marketing-focused, SEO-ready websites and landing pages built to convert visitors into leads and customers.',
            'Commerce' => 'Scalable e-commerce stores and storefronts with optimized product pages, checkout flows, and inventory integrations.',
            'Webapps' => 'Custom web applications, SPAs, and PWAs engineered for performance, security, and long-term extensibility — portals, dashboards, and client-facing apps that behave like native experiences in the browser.',
            'CMS' => 'Headless or traditional CMS setups (WordPress, Contentful, Sanity) and editorial workflows that empower content teams and reduce time-to-publish.',
            'Integrate' => 'API integrations, payment gateways, CRM sync, automation, plus domain, hosting & deployment (CDN, SSL, DNS, uptime/monitoring and CI/CD pipelines) — we connect systems and keep them running.',
        ],

        'includedPara' => 'A full development handover so your team can move fast',
        'included_1' => [
            'Discovery & technical audit (requirements, integrations, success metrics)',
            'Interactive prototypes and user flows (desktop & mobile)',
            'Responsive front-end development (HTML, CSS, JS; React/Vue option)',
            'Web app architecture and API design for SPAs/PWAs (where applicable)',
            'CMS setup & editor training (headless or integrated)',
            'E-commerce setup (checkout, payment gateway, product feeds)',
        ],
        'included_2' => [
            'Hosting & deployment setup (CDN, SSL, DNS, CI/CD pipeline, uptime monitoring)',
            'Performance optimization (core web vitals, image CDN, critical CSS)',
            'Security hardening and basic penetration checks',
            'Automated deployment pipeline & documentation',
            '30 days post-launch support and monitoring checklist',
        ],

        'pricing' => [
            'title' => "Let's Find the Right Strategy for You!",
            'plans' => [
                [
                    'name' => 'Starter',
                    'description' => 'Perfect for startups & small businesses',
                    'price' => '3,499',
                    'highlight' => false,
                    'features' => ['Basic SEO & Marketing', 'Social Media Management (1 Platform)', 'Monthly Performance Report']
                ],
                [
                    'name' => 'Growth ',
                    'description' => 'Full scale marketing for maximum impact',
                    'price' => '12,000',
                    'highlight' => true,
                    'features' => ['Complete Digital Marketing Suite', 'Paid Ads Management', 'Dedicated Account Manager', 'Email Marketing & Automation', 'Weekly Performance insights'],
                    'coreBenefits' => [
                        ['icon' => 'fa-brain', 'text' => 'Dedicated Account Manager'],
                        ['icon' => 'fa-accessible-icon', 'text' => 'Priority Support 24/7', 'brand' => true],
                        ['icon' => 'fa-bug', 'text' => 'Customized Growth Strength']
                    ]
                ]
            ]
        ],

        'whyChooseUs' => [
            'Product-first development',
            'Design + code synergy',
            'Performance as a feature',
            'Future-friendly stacks',
            'Clear governance',
            'Continuous optimization'
        ],
        
        'rightBlogTitle' => 'Featured article — How to design a landing page that actually converts',
        'rightBlogDes' => 'A practical checklist of UX, copy, and performance tweaks that move conversion metrics — with examples we’ve tested across dozens of launches.',

        'testimonials' => [
            [
                'name' => 'Emma Richard',
                'position' => 'CEO, Nexatech',
                'description' => '“Business Logo Experts turned our fragmented assets into a focused system. The new identity improved stakeholder confidence and helped us close enterprise deals faster.”',
                'result' => '(Result: +18% enterprise conversion)',
                'image' => 'assets/image/dummy-img-400x400.jpg',
                'stars' => 5,
            ],
            [
                'name' => 'David Mont',
                'position' => 'Marketing Director, StudioPlus',
                'description' => '“The visual language made our messaging clearer across channels. Templates saved our team hours each week and improved campaign consistency.”',
                'result' => '(Result: reduced time-to-publish by 40%)',
                'image' => 'assets/image/dummy-img-400x400.jpg',
                'stars' => 5,
            ],
            [
                'name' => 'Sophia Lewis',
                'position' => 'Founder, Lumen Studio',
                'description' => '“From naming to motion, the process was strategic and fast. The new logo and pitch assets helped us win a major partnership during launch.”',
                'result' => 'secured one major partnership in launch quarter',
                'image' => 'assets/image/dummy-img-400x400.jpg',
                'stars' => 5,
            ],
            [
                'name' => 'Emma Richard',
                'position' => 'CEO, Nexatech',
                'description' => '“Business Logo Experts turned our fragmented assets into a focused system. The new identity improved stakeholder confidence and helped us close enterprise deals faster.”',
                'result' => '+18% enterprise conversion',
                'image' => 'assets/image/dummy-img-400x400.jpg',
                'stars' => 5,
            ],
            [
                'name' => 'David Mont',
                'position' => 'Marketing Director, StudioPlus',
                'description' => '“The visual language made our messaging clearer across channels. Templates saved our team hours each week and improved campaign consistency.”',
                'result' => '(Result: reduced time-to-publish by 40%)',
                'image' => 'assets/image/dummy-img-400x400.jpg',
                'stars' => 5,
            ],
            [
                'name' => 'Sophia Lewis',
                'position' => 'Founder, Lumen Studio',
                'description' => '“From naming to motion, the process was strategic and fast. The new logo and pitch assets helped us win a major partnership during launch.”',
                'result' => 'secured one major partnership in launch quarter',
                'image' => 'assets/image/dummy-img-400x400.jpg',
                'stars' => 5,
            ],
        ],
        'testimonialSummary' => [
            'avatars' => [
                'assets/image/dummy-img-400x400.jpg',
                'assets/image/dummy-img-400x400.jpg',
                'assets/image/dummy-img-400x400.jpg',
                'assets/image/dummy-img-400x400.jpg',
            ],
            'positiveReviews' => '1,200+ brand',
            'reviewLabel' => 'systems delivered',

            'stats' => [
                [
                    'value' => +24,
                    'suffix' => '%',
                    'label' => 'lift in brand recall within 3 months',
                ],
                [
                    'value' => 87,
                    'suffix' => '%',
                    'label' => 'year-over-year',
                ],
            ],

            'services' => [
                'Social Media Growth',
                'Performance Marketing',
            ]
        ],
        
        'faqs' => [
            [
                'question' => 'How long does a typical identity project take?', 
                'answer' => 'Scope dependent — a focused logo + basics package takes 3–4 weeks. Full brand systems commonly take 6–12 weeks.'
            ],
            [
                'question' => 'Will I own the files and IP?', 
                'answer' => 'Yes. You receive source files and full IP assignment on final payment, plus usage guidance.'
            ],
            [
                'question' => 'Can you work with existing design systems?', 
                'answer' => 'Yes — we audit current assets and either extend the system or propose a phased refresh to preserve equity and speed implementation.'
            ],
            [
                'question' => 'What deliverables will I get at handover?', 
                'answer' => 'Source files (SVG, EPS, layered files), a style guide PDF, component templates, and an implementation checklist.'
            ],
            [
                'question' => 'Do you offer post-launch support?', 
                'answer' => 'Yes — 30 days included. Retainers and implementation services available as add-ons.'
            ],
            [
                'question' => 'How do you measure success for branding work?', 
                'answer' => 'We use qualitative and quantitative signals: brand recall studies, time-to-publish for marketing assets, conversion lift on launch pages, and client-specific KPIs set during discovery.'
            ],
        ],
    ],

    [
        'name' => 'App Development',
        'slug' => 'app-development',
        'description' => 'Custom Mobile Apps for Android & iOS',
        'overview' => 'We design and develop high-performance mobile applications tailored to your business needs.',
        'tagline' => 'iOS & Android App Solutions',
        'included' => ['UI/UX Design', 'Native & Hybrid Apps', 'App Store Deployment'],
        'images' => [
            'assets/image/dummy-img-600x400.jpg',
            'assets/image/dummy-img-600x400.jpg'
        ],
        'cta' => 'Launch your mobile app today!',
        'faqs' => [
            ['question' => 'Which platforms do you develop for?', 'answer' => 'We develop apps for Android, iOS, and cross-platform solutions like Flutter and React Native.'],
            ['question' => 'How long does app development take?', 'answer' => 'It depends on complexity, but typically 4–12 weeks for most business apps.'],
        ],
    ],

    [
        'name' => 'Animation',
        'slug' => 'animation',
        'description' => 'Creative Animations that Bring Ideas to Life',
        'overview' => 'We create engaging 2D and 3D animations for brands, products, and marketing campaigns.',
        'tagline' => '2D & 3D Animation Services',
        'included' => ['Explainer Videos', 'Motion Graphics', 'Product Animation'],
        'image' => 'assets/image/dummy-img-600x400.jpg',
        'cta' => 'Turn your ideas into stunning animations!',
        'faqs' => [
            ['question' => 'What type of animation do you offer?', 'answer' => 'We offer 2D animation, 3D animation, whiteboard videos, and motion graphics.'],
            ['question' => 'Can you create script and voiceover?', 'answer' => 'Yes, we provide complete production including scriptwriting and professional voiceovers.'],
        ],
    ],

    [
        'name' => 'AI Agents',
        'slug' => 'ai-agents',
        'description' => 'Smart AI Solutions to Automate Your Business',
        'overview' => 'We build intelligent AI agents and chatbots to automate workflows and improve customer engagement.',
        'tagline' => 'Automation with Artificial Intelligence',
        'included' => ['Custom AI Chatbots', 'Workflow Automation', 'CRM Integration'],
        'image' => 'assets/image/dummy-img-600x400.jpg',
        'cta' => 'Automate your business with AI today!',
        'faqs' => [
            ['question' => 'What can AI agents do?', 'answer' => 'AI agents can handle customer support, lead generation, scheduling, and data processing tasks.'],
            ['question' => 'Do you integrate with existing systems?', 'answer' => 'Yes, we integrate AI solutions with websites, CRMs, and third-party tools.'],
        ],
    ],

    [
        'name' => 'SEO',
        'slug' => 'seo',
        'description' => 'Rank Higher on Google & Increase Traffic',
        'overview' => 'Our SEO strategies help your business appear on top search results and attract quality traffic.',
        'tagline' => 'Search Engine Optimization',
        'included' => ['On-Page SEO', 'Technical SEO', 'Link Building'],
        'image' => 'assets/image/dummy-img-600x400.jpg',
        'cta' => 'Start ranking higher today!',
        'faqs' => [
            ['question' => 'How long does SEO take?', 'answer' => 'SEO usually takes 3–6 months to show significant results depending on competition.'],
            ['question' => 'Do you guarantee rankings?', 'answer' => 'We follow best SEO practices to improve rankings, but no one can guarantee #1 position on Google.'],
        ],
    ],

    [
        'name' => 'Social Media',
        'slug' => 'social-media',
        'description' => 'Grow Your Brand on Social Media Platforms',
        'overview' => 'We manage and grow your social media presence with creative content and targeted ads.',
        'tagline' => 'Social Media Marketing',
        'included' => ['Content Creation', 'Paid Social Ads', 'Community Management'],
        'image' => 'assets/image/dummy-img-600x400.jpg',
        'cta' => 'Boost your social presence today!',
        'faqs' => [
            ['question' => 'Which platforms do you manage?', 'answer' => 'We manage Facebook, Instagram, LinkedIn, TikTok, and other major platforms.'],
            ['question' => 'Do you create content?', 'answer' => 'Yes, we create graphics, videos, captions, and full content calendars.'],
        ],
    ],

];
