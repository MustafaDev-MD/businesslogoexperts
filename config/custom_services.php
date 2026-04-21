<?php

return [

    // ===============================
    // SERVICE CONFIG: BRANDING
    // --------------------------------
    // This configuration block defines the complete data structure
    // for the Branding & Identity service page.
    //
    // Includes:
    // - Hero/Banner content
    // - Expertise messaging
    // - Portfolio tabs with categorized assets
    // - Deliverables (included_1 & included_2)
    // - Pricing plans
    // - Testimonials & summary metrics
    // - FAQs and CTA sections
    //
    // Designed as a systems-first branding service focused on
    // recognition, consistency, and measurable business outcomes.
    // ===============================
    [
        // -------------------------------------------------
        // HERO / BANNER SECTION
        // -------------------------------------------------

        'name' => 'Branding',
        'info' => 'Build a stronger identity with systems that make your brand easier to remember, trust, and recognize.',
        'heading' => 'Branding',
        'slug' => 'branding',
        'parent' => 'Services',
        'parentLink' => 'services',
        'breadcrumb' => 'Branding & Identity',

        // -------------------------------------------------
        // BASIC SERVICE META
        // -------------------------------------------------

        'title' => 'Branding',
        'description' => 'Boost Your Brand with Strategic Marketing',

        // -------------------------------------------------
        // EXPERTISE SECTION (Positioning & Value Prop)
        // -------------------------------------------------

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

        // -------------------------------------------------
        // PORTFOLIO SECTION (Tabbed Categories)
        // -------------------------------------------------

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

        // Portfolio tab descriptions

        'portfolioContent' => [

            'Logo' => 'Distinctive primary marks, compact monograms, and flexible lockups built to work from favicon to billboard — crafted to improve recognition and recall.',

            'Systems' => 'Comprehensive style guides and component libraries plus voice & messaging pillars and naming frameworks — so every touchpoint stays consistent and strategic.',

            'Assets' => 'Ready-to-use visual packs: social templates, presentation decks, icon sets, illustration direction, and motion tokens that speed execution and maintain brand quality.',

            'Print' => 'Business cards, stationery, brochures, packaging, and printable templates designed for physical clarity and tangible brand impact.',

            'Rebrand' => 'Strategic audits, phased refreshes, rollout plans, and governance to preserve equity while sharpening positioning and accelerating growth.',
        ],

        // -------------------------------------------------
        // WHAT’S INCLUDED SECTION
        // -------------------------------------------------

        'includedPara' => 'Complete handover that gets you publishing, selling, and scaling faster.',

        'included_1' => [
            'Brand strategy brief',
            'Logo suite',
            'Color typography system',
            'Icon illustration guide',
        ],

        'included_2' => [
            'Voice messaging guide',
            'Template library',
            'Source files pack',
            'Handover support checklist',
        ],

        // -------------------------------------------------
        // PRICING STRUCTURE
        // -------------------------------------------------

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

        // -------------------------------------------------
        // TRUST BUILDING SECTIONS
        // -------------------------------------------------

        // Key value differentiators

        'whyChooseUs' => [
            'Brand-first, outcome-driven',
            'End-to-end systems',
            'Design + data',
            'Future-ready',
            'Transparent process',
            'Dedicated support'
        ],

        // Sidebar content (Blog + CTA)

        'rightBlogTitle' => 'Featured article — How to turn a logo into a growth engine',
        'rightBlogDes' => 'A logo should do more than look good — it should guide product choices and reduce buyer friction. We break down three tests to make sure your identity works at scale.',

        'rightCTATitle' => 'Ready to make your brand do the heavy lifting',
        'rightCTADes' => 'Book a free 30-minute brand audit — we’ll map quick wins and the right package for your goals.',

        // -------------------------------------------------
        // SOCIAL PROOF
        // -------------------------------------------------

        // Client testimonials

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

        // Aggregated performance summary

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

        // -------------------------------------------------
        // MAIN CTA SECTION
        // -------------------------------------------------

        'mainCTATitle' => 'Stay ahead with brand thinking that scales',
        'mainCTADes' => 'Subscribe for monthly insights, case studies, and quick design tests you can run tomorrow.',

        // -------------------------------------------------
        // FAQ SECTION
        // -------------------------------------------------

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

    // ===============================
    // SERVICE CONFIG: WEBSITE DEVELOPMENT
    // --------------------------------
    // This configuration block controls the Website Development
    // service page content and structure.
    //
    // Includes:
    // - Conversion-focused hero messaging
    // - Portfolio categories (Sites, Commerce, Webapps, CMS, Integrations)
    // - Technical deliverables & deployment scope
    // - Pricing tiers
    // - Performance-based testimonials
    // - Technical FAQs
    //
    // Built around product-first engineering, scalable architecture,
    // and measurable performance improvements.
    // ===============================
    [
        // -------------------------------------------------
        // HERO / BANNER SECTION
        // -------------------------------------------------

        'name' => 'Web Development',
        'info' => 'Create fast, polished websites and web apps that support your goals and give users a better experience.',
        'heading' => 'Website Development',
        'slug' => 'website-development',
        'parent' => 'Services',
        'parentLink' => 'services',
        'breadcrumb' => 'Website Development',

        // -------------------------------------------------
        // BASIC SERVICE META
        // -------------------------------------------------

        'title' => 'Website Development',
        'description' => 'Website Development',

        // -------------------------------------------------
        // EXPERTISE SECTION (Positioning & Value Prop)
        // -------------------------------------------------

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

        // -------------------------------------------------
        // PORTFOLIO SECTION (Tabbed Categories)
        // -------------------------------------------------

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

        // Portfolio tab descriptions

        'portfolioContent' => [

            'Sites' => 'Marketing-focused, SEO-ready websites and landing pages built to convert visitors into leads and customers.',

            'Commerce' => 'Scalable e-commerce stores and storefronts with optimized product pages, checkout flows, and inventory integrations.',

            'Webapps' => 'Custom web applications, SPAs, and PWAs engineered for performance, security, and long-term extensibility — portals, dashboards, and client-facing apps that behave like native experiences in the browser.',

            'CMS' => 'Headless or traditional CMS setups (WordPress, Contentful, Sanity) and editorial workflows that empower content teams and reduce time-to-publish.',

            'Integrate' => 'API integrations, payment gateways, CRM sync, automation, plus domain, hosting & deployment (CDN, SSL, DNS, uptime/monitoring and CI/CD pipelines) — we connect systems and keep them running.',

        ],

        // -------------------------------------------------
        // WHAT’S INCLUDED SECTION
        // -------------------------------------------------

        'includedPara' => 'A full development handover so your team can move fast',

        'included_1' => [
            'Discovery audit',
            'Wireframes user flows',
            'Responsive front-end',
            'Web app architecture',
        ],

        'included_2' => [
            'CMS setup training',
            'Hosting deployment setup',
            'Performance optimization',
            'Post-launch support',
        ],

        // -------------------------------------------------
        // PRICING STRUCTURE
        // -------------------------------------------------

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

        // -------------------------------------------------
        // TRUST BUILDING SECTIONS
        // -------------------------------------------------

        // Key value differentiators

        'whyChooseUs' => [
            'Product-first development',
            'Design + code synergy',
            'Performance as a feature',
            'Future-friendly stacks',
            'Clear governance',
            'Continuous optimization'
        ],

        // Sidebar content (Blog + CTA)

        'rightBlogTitle' => 'Featured article — How to design a landing page that actually converts',
        'rightBlogDes' => 'A practical checklist of UX, copy, and performance tweaks that move conversion metrics — with examples we’ve tested across dozens of launches.',

        'rightCTATitle' => 'Ready to ship a website that grows with your business?',
        'rightCTADes' => 'Book a free 30-minute audit — we’ll map quick wins and the right technical approach for your goals.',

        // -------------------------------------------------
        // SOCIAL PROOF
        // -------------------------------------------------

        // Client testimonials

        'testimonials' => [
            [
                'name' => 'Mark Lee',
                'position' => 'CTO, Arcus Retail',
                'description' => '“Business Logo Experts rebuilt our storefront on a headless stack and optimized our funnels. The technical quality and speed improvements directly impacted revenue.”',
                'result' => '(Result: +42% checkout conversion)',
                'image' => 'assets/image/dummy-img-400x400.jpg',
                'stars' => 5,
            ],
            [
                'name' => 'Priya Shah',
                'position' => 'Product Manager, MedBridge',
                'description' => '“The portal was delivered on time and with strong attention to security and UX. We’ve automated workflows that used to take hours.”',
                'result' => '(Result: 20% operational efficiency gain)',
                'image' => 'assets/image/dummy-img-400x400.jpg',
                'stars' => 5,
            ],
            [
                'name' => 'Lucas Rivera',
                'position' => 'Founder, SparkNotes Studio',
                'description' => '“The dev team worked with our marketers to make content launches painless. The new CMS workflow is a game changer.”',
                'result' => '(Result: content publishing time cut by 50%)',
                'image' => 'assets/image/dummy-img-400x400.jpg',
                'stars' => 5,
            ],
            [
                'name' => 'Mark Lee',
                'position' => 'CTO, Arcus Retail',
                'description' => '“Business Logo Experts rebuilt our storefront on a headless stack and optimized our funnels. The technical quality and speed improvements directly impacted revenue.”',
                'result' => '(Result: +42% checkout conversion)',
                'image' => 'assets/image/dummy-img-400x400.jpg',
                'stars' => 5,
            ],
            [
                'name' => 'Priya Shah',
                'position' => 'Product Manager, MedBridge',
                'description' => '“The portal was delivered on time and with strong attention to security and UX. We’ve automated workflows that used to take hours.”',
                'result' => '(Result: 20% operational efficiency gain)',
                'image' => 'assets/image/dummy-img-400x400.jpg',
                'stars' => 5,
            ],
            [
                'name' => 'Lucas Rivera',
                'position' => 'Founder, SparkNotes Studio',
                'description' => '“The dev team worked with our marketers to make content launches painless. The new CMS workflow is a game changer.”',
                'result' => '(Result: content publishing time cut by 50%)',
                'image' => 'assets/image/dummy-img-400x400.jpg',
                'stars' => 5,
            ],
        ],

        // Aggregated performance summary

        'testimonialSummary' => [
            'avatars' => [
                'assets/image/dummy-img-400x400.jpg',
                'assets/image/dummy-img-400x400.jpg',
                'assets/image/dummy-img-400x400.jpg',
                'assets/image/dummy-img-400x400.jpg',
            ],
            'positiveReviews' => '520+ websites &',
            'reviewLabel' => 'web apps launched',

            'stats' => [
                [
                    'value' => +33,
                    'suffix' => '%',
                    'label' => 'improvement in conversion after launch',
                ],
                [
                    'value' => 99.9,
                    'suffix' => '%',
                    'label' => 'average uptime across hosted clients',
                ],
            ],

            'services' => [
                'Social Media Growth',
                'Performance Marketing',
            ]
        ],

        // -------------------------------------------------
        // MAIN CTA SECTION
        // -------------------------------------------------

        'mainCTATitle' => 'Stay sharp on web trends & performance',
        'mainCTADes' => 'Subscribe for monthly engineering tips, performance case studies, and tactical UX tests you can run next sprint.',

        // -------------------------------------------------
        // FAQ SECTION
        // -------------------------------------------------

        'faqs' => [
            [
                'question' => 'How long does a website project typically take?',
                'answer' => 'Timelines vary by scope. A simple marketing site is often 4–6 weeks; a custom web app or ecommerce replatform is commonly 10–16+ weeks depending on integrations.'
            ],
            [
                'question' => 'Which tech stacks do you use?',
                'answer' => 'We’re stack-agnostic — React/Vue front-ends, headless CMS (Contentful, Sanity), static/JAMstack for speed, and Node/PHP backends where appropriate. We recommend stacks based on product needs, not trends.'
            ],
            [
                'question' => 'Do you handle integrations like payments, CRMs, analytics, domain & hosting?',
                'answer' => 'Yes. We integrate payment gateways, CRMs, analytics platforms, and custom APIs — and we manage domain setup, hosting & deployment pipelines, CDNs, and uptime monitoring as part of the Integrate scope.'
            ],
            [
                'question' => 'What’s included in post-launch support?',
                'answer' => '30 days of bug fixes and monitoring are included. We also offer retained support for ongoing optimization, security updates, and feature work.'
            ],
            [
                'question' => 'How do you measure success?',
                'answer' => 'We set KPIs in discovery — usually conversion rate, page speed, time-to-publish, and retention metrics — then instrument analytics and run iterative tests.'
            ],
            [
                'question' => 'Can you take over an existing codebase?',
                'answer' => 'Yes — we audit, document, and propose phased improvements so you get value quickly without risky rewrites.'
            ],
        ],
    ],

    // ===============================
    // SERVICE CONFIG: APP DEVELOPMENT
    // --------------------------------
    // This configuration block controls the App Development
    // service page content and structure.
    //
    // Includes:
    // - Native & cross-platform mobile builds
    // - Backend systems & API architecture
    // - Retention-focused UX
    // - App store deployment
    // - Performance & security hardening
    //
    // Built around product-led engineering,
    // scalable backend architecture,
    // and measurable user retention.
    // ===============================
    [
        // -------------------------------------------------
        // HERO / BANNER SECTION
        // -------------------------------------------------

        'name' => 'App Development',
        'info' => 'Design and develop mobile apps that feel smooth, useful, and ready for real-world growth.',
        'heading' => 'App Development',
        'slug' => 'app-development',
        'parent' => 'Services',
        'parentLink' => 'services',
        'breadcrumb' => 'App Development',

        // -------------------------------------------------
        // BASIC SERVICE META
        // -------------------------------------------------

        'title' => 'App Development',
        'description' => 'Apps that feel native — and scale.',

        // -------------------------------------------------
        // EXPERTISE SECTION
        // -------------------------------------------------

        'bannerImage' => 'assets/image/dummy-img-600x400.jpg',
        'bannerAlt' => 'App Development Banner',

        'expertiseTitle' => 'Turn idea into a product people keep using.',

        'expertiseDescription' => 'App Development at Business Logo Experts pairs product strategy, human-centered UX, and engineering discipline to deliver mobile apps that perform. We launch native iOS and Android apps, cross-platform builds, and full backend systems with analytics, sync, and security baked in. Our goal: build apps that win attention, solve real user problems, and produce measurable business results — not just another app on the store.',

        'images' => [
            'assets/image/dummy-img-600x400.jpg',
            'assets/image/dummy-img-600x400.jpg',
            'assets/image/dummy-img-600x400.jpg',
            'assets/image/dummy-img-600x400.jpg'
        ],

        // -------------------------------------------------
        // PORTFOLIO SECTION (Tabs)
        // -------------------------------------------------

        'portfolioImages' => [
            'Native' => [
                'assets/image/dummy-img-600x400.jpg',
                'assets/image/dummy-img-600x400.jpg',
            ],
            'Cross' => [
                'assets/image/dummy-img-600x400.jpg',
                'assets/image/dummy-img-600x400.jpg',
            ],
            'Backend' => [
                'assets/image/dummy-img-600x400.jpg',
                'assets/image/dummy-img-600x400.jpg',
            ],
            'Integrate' => [
                'assets/image/dummy-img-600x400.jpg',
                'assets/image/dummy-img-600x400.jpg',
            ],
            'Maintain' => [
                'assets/image/dummy-img-600x400.jpg',
                'assets/image/dummy-img-600x400.jpg',
            ]
        ],

        'portfolioContent' => [

            'Native' => 'Platform-first iOS and Android apps built for performance, accessibility, and the best possible user experience.',

            'Cross' => 'Cross-platform solutions (Flutter/React Native) that speed time-to-market while retaining near-native polish and performance.',

            'Backend' => 'Reliable server-side architecture, APIs, real-time sync, and data models built for scale, security, and analytics.',

            'Integrate' => 'Payment gateways, auth providers, CRMs, push notifications, analytics, and third-party APIs — we connect systems cleanly and securely.',

            'Maintain' => 'Release management, app store submission, monitoring, security updates, and retained engineering so your app keeps improving.',
        ],

        // -------------------------------------------------
        // WHAT’S INCLUDED
        // -------------------------------------------------

        'includedPara' => 'Everything you need to launch and operate a mobile product.',

        'included_1' => [
            'Product discovery',
            'Interactive prototypes',
            'Native cross-platform build',
            'Backend API architecture',
        ],

        'included_2' => [
            'Push analytics monitoring',
            'Security hardening',
            'App store submission',
            'CI/CD pipeline',
        ],

        // -------------------------------------------------
        // PRICING STRUCTURE
        // -------------------------------------------------

        'pricing' => [
            'title' => "Let's Find the Right Strategy for You!",
            'plans' => [
                [
                    'name' => 'Starter',
                    'description' => 'Perfect for startups & small businesses',
                    'price' => '14,000',
                    'highlight' => false,
                    'features' => ['Basic SEO & Marketing', 'Social Media Management (1 Platform)', 'Monthly Performance Report']
                ],
                [
                    'name' => 'Growth',
                    'description' => 'Full scale marketing for maximum impact',
                    'price' => '45,000',
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

        // -------------------------------------------------
        // WHY CHOOSE US
        // -------------------------------------------------

        'whyChooseUs' => [
            'Product-led engineering',
            'UX-first approach',
            'Native standards, modern stacks',
            'Secure & scalable backends',
            'Clear release process',
            'Ongoing partnership'
        ],

        // -------------------------------------------------
        // SIDEBAR BLOG + CTA
        // -------------------------------------------------

        'rightBlogTitle' => 'Featured article — Building mobile apps that retain: 5 design patterns that work',
        'rightBlogDes' => 'Small changes to onboarding, push timing, and data sync can dramatically improve retention. We share tested patterns from recent launches.',

        'rightCTATitle' => 'Ready to build an app users actually keep?',
        'rightCTADes' => 'Book a free 30-minute product audit — we’ll map core flows, tech approach, and a launch plan.',

        // -------------------------------------------------
        // TESTIMONIALS
        // -------------------------------------------------

        'testimonials' => [
            [
                'name' => 'Aisha Khan',
                'position' => 'Founder, PulseHealth',
                'description' => '“The team helped us go from idea to HIPAA-ready app in months. Their focus on usability and secure sync was the difference for our users.”',
                'result' => '(Result: +32% MAU in 90 days)',
                'image' => 'assets/image/dummy-img-400x400.jpg',
                'stars' => 5,
            ],
            [
                'name' => 'Carlos Mendes',
                'position' => 'COO, FlexWork',
                'description' => '“Choosing cross-platform saved us time and cost without compromising quality. The backend team handled complex payment flows seamlessly.”',
                'result' => '(Result: 50% faster time-to-market)',
                'image' => 'assets/image/dummy-img-400x400.jpg',
                'stars' => 5,
            ],
            [
                'name' => 'Nora Patel',
                'position' => 'Head of Ops, BeaconOps',
                'description' => '“Offline-first design and robust sync reduced our reporting errors and improved field efficiency significantly.”',
                'result' => '(Result: 40% reduction in data lag)',
                'image' => 'assets/image/dummy-img-400x400.jpg',
                'stars' => 5,
            ],
            [
                'name' => 'Aisha Khan',
                'position' => 'Founder, PulseHealth',
                'description' => '“The team helped us go from idea to HIPAA-ready app in months. Their focus on usability and secure sync was the difference for our users.”',
                'result' => '(Result: +32% MAU in 90 days)',
                'image' => 'assets/image/dummy-img-400x400.jpg',
                'stars' => 5,
            ],
            [
                'name' => 'Carlos Mendes',
                'position' => 'COO, FlexWork',
                'description' => '“Choosing cross-platform saved us time and cost without compromising quality. The backend team handled complex payment flows seamlessly.”',
                'result' => '(Result: 50% faster time-to-market)',
                'image' => 'assets/image/dummy-img-400x400.jpg',
                'stars' => 5,
            ],
            [
                'name' => 'Nora Patel',
                'position' => 'Head of Ops, BeaconOps',
                'description' => '“Offline-first design and robust sync reduced our reporting errors and improved field efficiency significantly.”',
                'result' => '(Result: 40% reduction in data lag)',
                'image' => 'assets/image/dummy-img-400x400.jpg',
                'stars' => 5,
            ],
        ],

        // -------------------------------------------------
        // TESTIMONIAL SUMMARY
        // -------------------------------------------------

        'testimonialSummary' => [
            'avatars' => [
                'assets/image/dummy-img-400x400.jpg',
                'assets/image/dummy-img-400x400.jpg',
                'assets/image/dummy-img-400x400.jpg',
            ],
            'positiveReviews' => '230+ mobile',
            'reviewLabel' => 'apps launched',

            'stats' => [
                [
                    'value' => +28,
                    'suffix' => '%',
                    'label' => 'increase in user retention post-launch',
                ],
                [
                    'value' => 99,
                    'suffix' => '%',
                    'label' => 'successful app store approvals (first submission)',
                ],
            ],

            'services' => [
                'Social Media Growth',
                'Performance Marketing',
            ]
        ],

        // -------------------------------------------------
        // MAIN CTA
        // -------------------------------------------------

        'mainCTATitle' => 'Mobile product insights, straight to your inbox',
        'mainCTADes' => 'Subscribe for design patterns, release checklists, and performance tips you can use in your next sprint.',

        // -------------------------------------------------
        // FAQ SECTION
        // -------------------------------------------------

        'faqs' => [
            [
                'question' => 'How long does an app project usually take?',
                'answer' => 'Small MVPs often take 8–12 weeks. Production-grade native apps commonly take 4–6 months depending on scope, integrations, and compliance requirements.'
            ],
            [
                'question' => 'Should we build native or cross-platform?',
                'answer' => 'It depends. We recommend native for performance-sensitive, platform-differentiated experiences and cross-platform for faster time-to-market when feature parity is acceptable. We’ll advise after discovery.'
            ],
            [
                'question' => 'Do you handle app-store submissions and reviews?',
                'answer' => 'Yes — we prepare builds, metadata, and assets, submit to App Store and Google Play, and support any review feedback until approval.'
            ],
            [
                'question' => 'How do you handle data & security?',
                'answer' => 'We follow best practices: encrypted storage, secure APIs, least-privilege auth, and region-specific compliance as needed. We also perform basic penetration checks.'
            ],
            [
                'question' => 'What’s included in post-launch support?',
                'answer' => '30 days of bug fixes and monitoring are included. We offer retained maintenance plans for ongoing feature work, monitoring, and updates.'
            ],
            [
                'question' => 'Can you integrate with our existing backend or CRM?',
                'answer' => 'Yes — we integrate with CRMs, payment gateways, analytics platforms, and custom APIs. We also offer migration and sync strategies for legacy systems.'
            ],
        ],
    ],

    // ===============================
    // SERVICE CONFIG: ANIMATION & MOTION
    // --------------------------------
    // This configuration block controls the Animation & Motion
    // service page content and structure.
    //
    // Includes:
    // - Short-form social & brand motion
    // - Explainers & UI micro-interactions
    // - 3D visuals & product motion systems
    // - Performance-aware, optimized delivery
    //
    // Built around narrative-first motion,
    // technical polish, and measurable engagement.
    // ===============================
    [
        // -------------------------------------------------
        // HERO / BANNER SECTION
        // -------------------------------------------------

        'name' => 'Animation',
        'info' => 'Use motion to simplify ideas, strengthen storytelling, and make your brand feel more alive.',
        'heading' => 'Animation & Motion',
        'slug' => 'animation-motion',
        'parent' => 'Services',
        'parentLink' => 'services',
        'breadcrumb' => 'Animation & Motion',

        // -------------------------------------------------
        // BASIC SERVICE META
        // -------------------------------------------------

        'title' => 'Animation & Motion',
        'description' => 'Motion that explains, excites, and converts.',

        // -------------------------------------------------
        // EXPERTISE SECTION
        // -------------------------------------------------

        'bannerImage' => 'assets/image/dummy-img-600x400.jpg',
        'bannerAlt' => 'Animation & Motion Banner',

        'expertiseTitle' => 'Tell better stories with motion that works.',

        'expertiseDescription' => 'Animation & Motion at Business Logo Experts blends storytelling, product strategy, and technical craft to create animations that clarify ideas and move people to act. Whether you need a short social spot, a customer-facing explainer, or micro-interactions for your product, we design motion to support your brand and your metrics. We prototype concepts quickly, validate timing and clarity, then deliver optimized files ready for web, mobile, or broadcast — so animation becomes a measurable part of your growth stack.',

        'images' => [
            'assets/image/dummy-img-600x400.jpg',
            'assets/image/dummy-img-600x400.jpg',
            'assets/image/dummy-img-600x400.jpg',
            'assets/image/dummy-img-600x400.jpg'
        ],

        // -------------------------------------------------
        // PORTFOLIO SECTION (Tabs)
        // -------------------------------------------------

        'portfolioImages' => [
            'Motion' => [
                'assets/image/dummy-img-600x400.jpg',
                'assets/image/dummy-img-600x400.jpg',
            ],
            'Explainers' => [
                'assets/image/dummy-img-600x400.jpg',
                'assets/image/dummy-img-600x400.jpg',
            ],
            'UI' => [
                'assets/image/dummy-img-600x400.jpg',
                'assets/image/dummy-img-600x400.jpg',
            ],
            'Social' => [
                'assets/image/dummy-img-600x400.jpg',
                'assets/image/dummy-img-600x400.jpg',
            ],
            '3D' => [
                'assets/image/dummy-img-600x400.jpg',
                'assets/image/dummy-img-600x400.jpg',
            ],
        ],

        'portfolioContent' => [

            'Motion' => 'Short-form animation and brand motion — intros, outros, transitions, and animated ID elements that add polish and recognition.',

            'Explainers' => 'Clear, persuasive product or service explainer videos — scripted, storyboarded, and produced to simplify complex ideas and drive action.',

            'UI' => 'Micro-interactions, onboarding sequences, and motion systems for product interfaces that improve usability and delight users.',

            'Social' => 'Vertical and square video ads, short-form content, and loopable clips crafted for attention on social feeds and ad platforms.',

            '3D' => '3D product visuals, environment renders, and branded assets for hero scenes, product demos, and tactile brand moments.',
        ],

        // -------------------------------------------------
        // WHAT’S INCLUDED
        // -------------------------------------------------

        'includedPara' => 'Everything you need to produce and ship motion work.',

        'included_1' => [
            'Script workshop',
            'Storyboard animatic',
            'Style concept frames',
            'Full animation delivery',
        ],

        'included_2' => [
            'Sound design mix',
            'Export presets',
            'Source project files',
            'Post-delivery support',
        ],

        // -------------------------------------------------
        // PRICING STRUCTURE
        // -------------------------------------------------

        'pricing' => [
            'title' => "Let's Find the Right Strategy for You!",
            'plans' => [
                [
                    'name' => 'Starter',
                    'description' => 'Perfect for startups & small businesses',
                    'price' => '1,200',
                    'highlight' => false,
                    'features' => ['Basic SEO & Marketing', 'Social Media Management (1 Platform)', 'Monthly Performance Report']
                ],
                [
                    'name' => 'Growth',
                    'description' => 'Full scale marketing for maximum impact',
                    'price' => '6,500',
                    'highlight' => true,
                    'features' => ['Complete Digital Marketing Suite', 'Paid Ads Management', 'Dedicated Account Manager', 'Email Marketing & Automation', 'Weekly Performance insights'],
                    'coreBenefits' => [
                        ['icon' => 'fa-brain', 'text' => 'Dedicated Account Manager'],
                        ['icon' => 'fa-accessible-icon', 'text' => 'Priority Support 24/7', 'brand' => true],
                        ['icon' => 'fa-bug', 'text' => 'Customized Growth Strength']
                    ]
                ],
            ],
        ],

        // -------------------------------------------------
        // WHY CHOOSE US
        // -------------------------------------------------

        'whyChooseUs' => [
            'Story-first approach',
            'Cross-discipline teams',
            'Optimized delivery',
            'Motion systems that scale',
            'Performance-aware',
            'Fast iteration',
        ],

        // -------------------------------------------------
        // SIDEBAR BLOG + CTA
        // -------------------------------------------------

        'rightBlogTitle' => 'Featured article — Motion that moves metrics: A pragmatic checklist',
        'rightBlogDes' => 'Which animation choices actually improve comprehension and conversion? We share practical rules and experiments that show measurable wins.',

        'rightCTATitle' => 'Ready to bring your story to life in motion?',
        'rightCTADes' => 'Book a free 30-minute motion brief review — we’ll map the right format, timeline, and impact for your goals.',

        // -------------------------------------------------
        // TESTIMONIALS
        // -------------------------------------------------

        'testimonials' => [
            [
                'name' => 'Felix Ramos',
                'position' => 'Head of Growth, Arcus Retail',
                'description' => '“The social spots were sharper and faster than we expected. Performance improved across our paid channels immediately.”',
                'result' => '(Result: +45% engagement lift)',
                'image' => 'assets/image/dummy-img-400x400.jpg',
                'stars' => 5,
            ],
            [
                'name' => 'Maya Chen',
                'position' => 'Product Lead, Nexa',
                'description' => '“Micro-interactions reduced confusion in our onboarding flow and helped users finish tasks faster.”',
                'result' => '(Result: +18% task completion)',
                'image' => 'assets/image/dummy-img-400x400.jpg',
                'stars' => 5,
            ],
            [
                'name' => 'Omar Aziz',
                'position' => 'CMO, Lumen Studio',
                'description' => '“The explainer video was a game-changer for demos — clear, quick, and persuasive.”',
                'result' => '(Result: +32% demo requests)',
                'image' => 'assets/image/dummy-img-400x400.jpg',
                'stars' => 5,
            ],
            [
                'name' => 'Felix Ramos',
                'position' => 'Head of Growth, Arcus Retail',
                'description' => '“The social spots were sharper and faster than we expected. Performance improved across our paid channels immediately.”',
                'result' => '(Result: +45% engagement lift)',
                'image' => 'assets/image/dummy-img-400x400.jpg',
                'stars' => 5,
            ],
            [
                'name' => 'Maya Chen',
                'position' => 'Product Lead, Nexa',
                'description' => '“Micro-interactions reduced confusion in our onboarding flow and helped users finish tasks faster.”',
                'result' => '(Result: +18% task completion)',
                'image' => 'assets/image/dummy-img-400x400.jpg',
                'stars' => 5,
            ],
            [
                'name' => 'Omar Aziz',
                'position' => 'CMO, Lumen Studio',
                'description' => '“The explainer video was a game-changer for demos — clear, quick, and persuasive.”',
                'result' => '(Result: +32% demo requests)',
                'image' => 'assets/image/dummy-img-400x400.jpg',
                'stars' => 5,
            ],
        ],

        // -------------------------------------------------
        // TESTIMONIAL SUMMARY
        // -------------------------------------------------

        'testimonialSummary' => [
            'avatars' => [
                'assets/image/dummy-img-400x400.jpg',
                'assets/image/dummy-img-400x400.jpg',
                'assets/image/dummy-img-400x400.jpg',
            ],
            'positiveReviews' => '800+ animation',
            'reviewLabel' => 'assets delivered',

            'stats' => [
                [
                    'value' => +36,
                    'suffix' => '%',
                    'label' => 'engagement lift on campaign ads using motion',
                ],
                [
                    'value' => 70,
                    'suffix' => '%',
                    'label' => 'repeat clients for ongoing motion needs',
                ],
            ],

            'services' => [
                'Social Media Growth',
                'Performance Marketing',
            ]
        ],

        // -------------------------------------------------
        // MAIN CTA
        // -------------------------------------------------

        'mainCTATitle' => 'Get motion tips & short case studies',
        'mainCTADes' => 'Subscribe for monthly motion experiments, production shortcuts, and before/after breakdowns you can use in your campaigns.',

        // -------------------------------------------------
        // FAQ SECTION
        // -------------------------------------------------

        'faqs' => [
            [
                'question' => 'What formats will you deliver?',
                'answer' => 'We deliver MP4 (H.264), GIFs for short loops, and Lottie/JSON for UI animations — plus source project files on request.'
            ],
            [
                'question' => 'How long does an explainer typically take?',
                'answer' => 'A standard 60–90s explainer with script, storyboard, and animation normally completes in 3–6 weeks depending on revisions and complexity.'
            ],
            [
                'question' => 'Do you provide voiceover and music?',
                'answer' => 'Yes — we can cast voice talent and produce sound design. Music licensing or bespoke tracks are handled per project.'
            ],
            [
                'question' => 'Can you build a motion system for our product?',
                'answer' => 'Yes — we create motion tokens, easing curves, and component rules so motion is consistent and reusable across your product.'
            ],
            [
                'question' => 'What’s included in post-delivery support?',
                'answer' => '30 days of polish and format variants are included. Retained content programs cover ongoing edits and seasonal campaigns.'
            ],
            [
                'question' => 'How do you measure the impact of motion?',
                'answer' => 'We measure engagement lift, click-through, time-on-page, and A/B test creative variants to show concrete improvements.'
            ],
        ],
    ],

    // ===============================
    // SERVICE CONFIG: AI AGENTS
    // --------------------------------
    // This configuration block controls the AI Agents
    // service page content and structure.
    //
    // Includes:
    // - Chatbots & internal copilots
    // - Workflow automation
    // - CRM & API integrations
    // - Prompt engineering & knowledge bases
    //
    // Built around practical AI, secure systems,
    // and measurable operational impact.
    // ===============================
    [
        // -------------------------------------------------
        // HERO / BANNER SECTION
        // -------------------------------------------------

        'name' => 'AI Agents',
        'info' => 'Automate repetitive work with smart AI tools that save time and improve how your business operates.',
        'heading' => 'AI Agents',
        'slug' => 'ai-agents',
        'parent' => 'Services',
        'parentLink' => 'services',
        'breadcrumb' => 'AI Agents',

        // -------------------------------------------------
        // BASIC SERVICE META
        // -------------------------------------------------

        'title' => 'AI Agents',
        'description' => 'Intelligent agents that work 24/7.',

        // -------------------------------------------------
        // EXPERTISE SECTION
        // -------------------------------------------------

        'bannerImage' => 'assets/image/dummy-img-600x400.jpg',
        'bannerAlt' => 'AI Agents Banner',

        'expertiseTitle' => 'Turn repetitive work into autonomous systems.',

        'expertiseDescription' => 'AI Agents at Business Logo Experts combines strategy, prompt engineering, system design, and secure integrations to build AI-powered assistants that actually deliver business value. From customer support bots and internal copilots to lead qualification agents and workflow automation, we design agents that plug into your tools, follow clear logic, and produce measurable outcomes.
        This isn’t hype-driven AI. It’s structured, production-ready automation — with guardrails, analytics, and human oversight where needed.',

        'images' => [
            'assets/image/dummy-img-600x400.jpg',
            'assets/image/dummy-img-600x400.jpg',
            'assets/image/dummy-img-600x400.jpg',
            'assets/image/dummy-img-600x400.jpg'
        ],

        // -------------------------------------------------
        // PORTFOLIO SECTION (Tabs)
        // -------------------------------------------------

        'portfolioImages' => [
            'Chatbots' => [
                'assets/image/dummy-img-600x400.jpg',
                'assets/image/dummy-img-600x400.jpg',
            ],
            'Automate' => [
                'assets/image/dummy-img-600x400.jpg',
                'assets/image/dummy-img-600x400.jpg',
            ],
            'Copilot' => [
                'assets/image/dummy-img-600x400.jpg',
                'assets/image/dummy-img-600x400.jpg',
            ],
            'Integrate' => [
                'assets/image/dummy-img-600x400.jpg',
                'assets/image/dummy-img-600x400.jpg',
            ],
            'Train' => [
                'assets/image/dummy-img-600x400.jpg',
                'assets/image/dummy-img-600x400.jpg',
            ],
        ],

        'portfolioContent' => [

            'Chatbots' => 'Customer-facing AI assistants for websites, apps, and messaging platforms — answering FAQs, qualifying leads, and guiding users in real time.',

            'Automate' => 'Workflow automation agents that connect your CRM, email, forms, and internal tools — reducing manual tasks and errors.',

            'Copilot' => 'Internal AI copilots for teams — summarizing documents, drafting content, analyzing data, and accelerating decision-making.',

            'Integrate' => 'API connections, CRM sync, database access, payment systems, and third-party tools — secure, permission-aware integrations that make agents useful.',

            'Train' => 'Custom knowledge-base setup, prompt engineering, testing frameworks, and performance tuning so agents improve over time.',
        ],

        // -------------------------------------------------
        // WHAT’S INCLUDED
        // -------------------------------------------------

        'includedPara' => 'From strategy to deployment and optimization.',

        'included_1' => [
            'AI opportunity audit',
            'Use-case prioritization',
            'Prompt engineering',
            'Knowledge base setup',
        ],

        'included_2' => [
            'API integrations',
            'Security configuration',
            'Performance dashboard',
            'Post-launch tuning',
        ],

        // -------------------------------------------------
        // PRICING STRUCTURE
        // -------------------------------------------------

        'pricing' => [
            'title' => "Let's Find the Right Strategy for You!",
            'plans' => [
                [
                    'name' => 'Starter',
                    'description' => 'Perfect for startups & small businesses',
                    'price' => '3,000',
                    'highlight' => false,
                    'features' => ['Basic SEO & Marketing', 'Social Media Management (1 Platform)', 'Monthly Performance Report']
                ],
                [
                    'name' => 'Growth',
                    'description' => 'Full scale marketing for maximum impact',
                    'price' => '12,000',
                    'highlight' => true,
                    'features' => ['Complete Digital Marketing Suite', 'Paid Ads Management', 'Dedicated Account Manager', 'Email Marketing & Automation', 'Weekly Performance insights'],
                    'coreBenefits' => [
                        ['icon' => 'fa-brain', 'text' => 'Dedicated Account Manager'],
                        ['icon' => 'fa-accessible-icon', 'text' => 'Priority Support 24/7', 'brand' => true],
                        ['icon' => 'fa-bug', 'text' => 'Customized Growth Strength']
                    ]
                ],
            ],
        ],

        // -------------------------------------------------
        // WHY CHOOSE US
        // -------------------------------------------------

        'whyChooseUs' => [
            'Use-case first',
            'Secure by design',
            'Human-in-the-loop',
            'Integrated systems',
            'Measured impact',
            'Scalable architecture',
        ],

        // -------------------------------------------------
        // SIDEBAR BLOG + CTA
        // -------------------------------------------------

        'rightBlogTitle' => 'Featured article — AI agents that actually save money: a practical framework',
        'rightBlogDes' => 'How to evaluate ROI, avoid common automation traps, and design agents that produce measurable results.',

        'rightCTATitle' => 'Ready to automate smarter?',
        'rightCTADes' => 'Book a free AI workflow audit — we’ll identify high-impact automation opportunities in your business.',

        // -------------------------------------------------
        // TESTIMONIALS
        // -------------------------------------------------

        'testimonials' => [
            [
                'name' => 'Daniel Ross',
                'position' => 'Founder, Nova Legal',
                'description' => '“The intake agent qualifies clients before they ever reach our team. It’s like adding a 24/7 assistant without increasing payroll.”',
                'result' => '(Result: +38% qualified consultations)',
                'image' => 'assets/image/dummy-img-400x400.jpg',
                'stars' => 5,
            ],
            [
                'name' => 'Sofia Martinez',
                'position' => 'CX Lead, BrightCart',
                'description' => '“Our support volume dropped immediately. The AI handles repetitive questions and escalates only when needed.”',
                'result' => '(Result: 52% ticket reduction)',
                'image' => 'assets/image/dummy-img-400x400.jpg',
                'stars' => 5,
            ],
            [
                'name' => 'Ethan Cole',
                'position' => 'COO, AtlasOps',
                'description' => '“The internal copilot reduced hours of manual reporting every week. Leadership decisions are now backed by faster insights.”',
                'result' => '(Result: 60% faster report turnaround)',
                'image' => 'assets/image/dummy-img-400x400.jpg',
                'stars' => 5,
            ],
            [
                'name' => 'Daniel Ross',
                'position' => 'Founder, Nova Legal',
                'description' => '“The intake agent qualifies clients before they ever reach our team. It’s like adding a 24/7 assistant without increasing payroll.”',
                'result' => '(Result: +38% qualified consultations)',
                'image' => 'assets/image/dummy-img-400x400.jpg',
                'stars' => 5,
            ],
            [
                'name' => 'Sofia Martinez',
                'position' => 'CX Lead, BrightCart',
                'description' => '“Our support volume dropped immediately. The AI handles repetitive questions and escalates only when needed.”',
                'result' => '(Result: 52% ticket reduction)',
                'image' => 'assets/image/dummy-img-400x400.jpg',
                'stars' => 5,
            ],
            [
                'name' => 'Ethan Cole',
                'position' => 'COO, AtlasOps',
                'description' => '“The internal copilot reduced hours of manual reporting every week. Leadership decisions are now backed by faster insights.”',
                'result' => '(Result: 60% faster report turnaround)',
                'image' => 'assets/image/dummy-img-400x400.jpg',
                'stars' => 5,
            ],
        ],

        // -------------------------------------------------
        // TESTIMONIAL SUMMARY
        // -------------------------------------------------

        'testimonialSummary' => [
            'avatars' => [
                'assets/image/dummy-img-400x400.jpg',
                'assets/image/dummy-img-400x400.jpg',
                'assets/image/dummy-img-400x400.jpg',
            ],
            'positiveReviews' => '150+ AI',
            'reviewLabel' => 'workflows deployed',

            'stats' => [
                [
                    'value' => '40–60',
                    'suffix' => '%',
                    'label' => ' reduction in manual task time',
                ],
                [
                    'value' => 35,
                    'suffix' => '%',
                    'label' => 'lift in lead qualification efficiency',
                ],
            ],

            'services' => [
                'Social Media Growth',
                'Performance Marketing',
            ]
        ],

        // -------------------------------------------------
        // MAIN CTA
        // -------------------------------------------------

        'mainCTATitle' => 'Stay ahead in applied AI',
        'mainCTADes' => 'Subscribe for automation case studies, prompt engineering insights, and practical AI strategies for growing teams.',

        // -------------------------------------------------
        // FAQ SECTION
        // -------------------------------------------------

        'faqs' => [
            [
                'question' => 'What’s the difference between a chatbot and an AI agent?',
                'answer' => 'A chatbot answers questions. An AI agent can take actions — update CRMs, trigger workflows, generate reports, and make decisions within defined guardrails.'
            ],
            [
                'question' => 'Is our data secure?',
                'answer' => 'Yes. We design role-based access controls, encrypted data handling, and strict integration boundaries. Sensitive workflows can be isolated and logged.'
            ],
            [
                'question' => 'How long does implementation take?',
                'answer' => 'A focused chatbot can launch in 2–4 weeks. Multi-agent automation systems typically take 6–10 weeks depending on integrations.'
            ],
            [
                'question' => 'Can AI agents integrate with our existing tools?',
                'answer' => 'Yes — we integrate with CRMs, email platforms, internal dashboards, payment systems, and custom APIs.'
            ],
            [
                'question' => 'How do you measure ROI?',
                'answer' => 'We define KPIs before deployment — typically cost savings, time reduction, lead conversion lift, or ticket deflection — and track performance post-launch.'
            ],
            [
                'question' => 'Will AI replace our team?',
                'answer' => 'The goal is augmentation, not replacement. AI agents handle repetitive tasks so your team can focus on strategy, relationships, and higher-value work.'
            ],
        ],
    ],

    // ===============================
    // SERVICE CONFIG: SEO
    // --------------------------------
    // This configuration block controls the SEO
    // service page content and structure.
    //
    // Includes:
    // - Technical SEO audits & fixes
    // - Content strategy & pillar pages
    // - Local & ecommerce optimization
    // - Link-building & growth experiments
    //
    // Built around technical rigor, content impact,
    // and measurable organic growth.
    // ===============================
    [
        // -------------------------------------------------
        // HERO / BANNER SECTION
        // -------------------------------------------------

        'name' => 'SEO',
        'info' => 'Grow your visibility in search with strategies that bring in the right traffic and support long-term growth.',
        'heading' => 'SEO',
        'slug' => 'seo',
        'parent' => 'Services',
        'parentLink' => 'services',
        'breadcrumb' => 'SEO',

        // -------------------------------------------------
        // BASIC SERVICE META
        // -------------------------------------------------

        'title' => 'SEO',
        'description' => 'Search that finds and converts.',

        // -------------------------------------------------
        // EXPERTISE SECTION
        // -------------------------------------------------

        'bannerImage' => 'assets/image/dummy-img-600x400.jpg',
        'bannerAlt' => 'SEO Banner',

        'expertiseTitle' => 'Make organic discovery a repeatable growth channel.',

        'expertiseDescription' => 'SEO at Business Logo Experts combines technical rigor, content strategy, and continuous optimization to bring qualified visitors that convert. We diagnose the full funnel — crawling, indexing, content fit, and conversion paths — then execute a prioritized plan tied to your business goals. The result: sustained visibility, better traffic quality, and measurable ROI.',

        'images' => [
            'assets/image/dummy-img-600x400.jpg',
            'assets/image/dummy-img-600x400.jpg',
            'assets/image/dummy-img-600x400.jpg',
            'assets/image/dummy-img-600x400.jpg'
        ],

        // -------------------------------------------------
        // PORTFOLIO SECTION (Tabs)
        // -------------------------------------------------

        'portfolioImages' => [
            'Technical' => [
                'assets/image/dummy-img-600x400.jpg',
                'assets/image/dummy-img-600x400.jpg',
            ],
            'Content' => [
                'assets/image/dummy-img-600x400.jpg',
                'assets/image/dummy-img-600x400.jpg',
            ],
            'Local' => [
                'assets/image/dummy-img-600x400.jpg',
                'assets/image/dummy-img-600x400.jpg',
            ],
            'Commerce' => [
                'assets/image/dummy-img-600x400.jpg',
                'assets/image/dummy-img-600x400.jpg',
            ],
            'Growth' => [
                'assets/image/dummy-img-600x400.jpg',
                'assets/image/dummy-img-600x400.jpg',
            ],
        ],

        'portfolioContent' => [

            'Technical' => 'Site audits, crawl fixes, structured data, core web vitals, and speed improvements to ensure search engines can find and trust your site.',

            'Content' => 'Keyword-driven content strategy, pillar pages, briefs, and conversion-focused copy that ranks and moves readers to action.',

            'Local' => 'Local SEO, Google Business Profile optimization, citation management, and location-based landing pages to win nearby searchers.',

            'Commerce' => 'Ecommerce SEO: product feed optimization, faceted navigation strategy, category page content, and conversion-focused schema.',

            'Growth' => 'Ongoing testing, link acquisition, growth experiments, and performance reporting to scale organic impact month over month.',

        ],

        // -------------------------------------------------
        // WHAT’S INCLUDED
        // -------------------------------------------------

        'includedPara' => 'A complete SEO program built to deliver results.',

        'included_1' => [
            'Technical SEO audit',
            'Core web vitals',
            'Keyword research',
            'Content briefs',
        ],

        'included_2' => [
            'Local optimization',
            'Ecommerce optimization',
            'Link outreach',
            'Monthly reporting',
        ],

        // -------------------------------------------------
        // PRICING STRUCTURE
        // -------------------------------------------------

        'pricing' => [
            'title' => "Let's Find the Right Strategy for You!",
            'plans' => [
                [
                    'name' => 'Starter',
                    'description' => 'Perfect for startups & small businesses',
                    'price' => '1,499',
                    'highlight' => false,
                    'features' => ['Basic SEO & Marketing', 'Social Media Management (1 Platform)', 'Monthly Performance Report']
                ],
                [
                    'name' => 'Growth',
                    'description' => 'Full scale marketing for maximum impact',
                    'price' => '4,500',
                    'highlight' => true,
                    'features' => ['Complete Digital Marketing Suite', 'Paid Ads Management', 'Dedicated Account Manager', 'Email Marketing & Automation', 'Weekly Performance insights'],
                    'coreBenefits' => [
                        ['icon' => 'fa-brain', 'text' => 'Dedicated Account Manager'],
                        ['icon' => 'fa-accessible-icon', 'text' => 'Priority Support 24/7', 'brand' => true],
                        ['icon' => 'fa-bug', 'text' => 'Customized Growth Strength']
                    ]
                ],
            ],
        ],

        // -------------------------------------------------
        // WHY CHOOSE US
        // -------------------------------------------------

        'whyChooseUs' => [
            'Outcome-first roadmaps',
            'Technical depth',
            'Content that converts',
            'Transparent reporting',
            'Ethical link growth',
            'Continuous optimization',
        ],

        // -------------------------------------------------
        // SIDEBAR BLOG + CTA
        // -------------------------------------------------

        'rightBlogTitle' => 'Featured article — The SEO checklist for modern product sites',
        'rightBlogDes' => 'A practical checklist that covers technical, content, and conversion steps you can run in a sprint to see measurable gains.',

        'rightCTATitle' => 'Ready to grow organic traffic that converts?',
        'rightCTADes' => 'Book a free SEO audit — we’ll surface quick wins and a 90-day plan to move the needle.',

        // -------------------------------------------------
        // TESTIMONIALS
        // -------------------------------------------------

        'testimonials' => [
            [
                'name' => 'Hannah Lee',
                'position' => 'Head of Growth, Arcus Retail',
                'description' => '“Technical clean-up and category content lifted our product discoverability across major keywords. Revenue followed.”',
                'result' => '(Result: +64% organic revenue in 6 months)',
                'image' => 'assets/image/dummy-img-400x400.jpg',
                'stars' => 5,
            ],
            [
                'name' => 'Omar Rizvi',
                'position' => 'Marketing Lead, MedBridge',
                'description' => '“Local pages and GBP work scaled our inbound pipeline across regions — high-intent leads increased noticeably.”',
                'result' => '(Result: +48% local leads)',
                'image' => 'assets/image/dummy-img-400x400.jpg',
                'stars' => 5,
            ],
            [
                'name' => 'Maya Brooks',
                'position' => 'Content Director, SparkNotes Studio',
                'description' => '“The pillar strategy and internal linking fixed our content dilution issues and returned consistent organic growth.”',
                'result' => '(Result: +120% organic sessions)',
                'image' => 'assets/image/dummy-img-400x400.jpg',
                'stars' => 5,
            ],
            [
                'name' => 'Hannah Lee',
                'position' => 'Head of Growth, Arcus Retail',
                'description' => '“Technical clean-up and category content lifted our product discoverability across major keywords. Revenue followed.”',
                'result' => '(Result: +64% organic revenue in 6 months)',
                'image' => 'assets/image/dummy-img-400x400.jpg',
                'stars' => 5,
            ],
            [
                'name' => 'Omar Rizvi',
                'position' => 'Marketing Lead, MedBridge',
                'description' => '“Local pages and GBP work scaled our inbound pipeline across regions — high-intent leads increased noticeably.”',
                'result' => '(Result: +48% local leads)',
                'image' => 'assets/image/dummy-img-400x400.jpg',
                'stars' => 5,
            ],
            [
                'name' => 'Maya Brooks',
                'position' => 'Content Director, SparkNotes Studio',
                'description' => '“The pillar strategy and internal linking fixed our content dilution issues and returned consistent organic growth.”',
                'result' => '(Result: +120% organic sessions)',
                'image' => 'assets/image/dummy-img-400x400.jpg',
                'stars' => 5,
            ],
        ],

        // -------------------------------------------------
        // TESTIMONIAL SUMMARY
        // -------------------------------------------------

        'testimonialSummary' => [
            'avatars' => [
                'assets/image/dummy-img-400x400.jpg',
                'assets/image/dummy-img-400x400.jpg',
                'assets/image/dummy-img-400x400.jpg',
            ],
            'positiveReviews' => '500+ SEO',
            'reviewLabel' => 'programs delivered',

            'stats' => [
                [
                    'value' => +45,
                    'suffix' => '%',
                    'label' => 'median organic traffic lift in first 6 months',
                ],
                [
                    'value' => +38,
                    'suffix' => '%',
                    'label' => 'average improvement in organic conversions',
                ],
            ],

            'services' => [
                'Social Media Growth',
                'Performance Marketing',
            ]
        ],

        // -------------------------------------------------
        // MAIN CTA
        // -------------------------------------------------

        'mainCTATitle' => 'Weekly SEO insights you can use',
        'mainCTADes' => 'Subscribe for tactical audits, content tests, and growth experiments you can run next sprint.',

        // -------------------------------------------------
        // FAQ SECTION
        // -------------------------------------------------

        'faqs' => [
            [
                'question' => 'How long until we see SEO results?',
                'answer' => 'SEO timelines vary by competition and baseline. Expect technical fixes within weeks and measurable traffic gains commonly within 3–6 months with consistent effort.'
            ],
            [
                'question' => 'Do you guarantee rankings?',
                'answer' => 'No reputable SEO should promise fixed rankings. We guarantee a prioritized plan, transparent work, and measurable improvements against agreed KPIs.'
            ],
            [
                'question' => 'How do you approach content for SEO?',
                'answer' => 'We combine research-driven briefs, conversion-focused copy, and internal linking strategies to create scalable content that ranks and converts.'
            ],
            [
                'question' => 'Will you work with our in-house team?',
                'answer' => 'Yes — we collaborate with internal writers, devs, and product teams, or we can fully execute the program for you.'
            ],
            [
                'question' => 'Do you handle migrations and technical site moves?',
                'answer' => 'Yes — we plan, test, and run migrations with redirects, monitoring, and rollback plans to minimize traffic loss.'
            ],
            [
                'question' => 'How do you measure success?',
                'answer' => 'We track organic sessions, keyword visibility, conversion rate for organic traffic, lead quality, and revenue attribution where possible.'
            ],
        ],
    ],

    // ===============================
    // SERVICE CONFIG: Social Media
    // --------------------------------
    // This configuration block controls the Social Media
    // service page content and structure.
    //
    // Includes:
    // - Social strategy & content systems
    // - Paid media campaigns & testing
    // - Community growth & moderation
    // - Analytics & optimization
    //
    // Built around platform-native creativity,
    // performance marketing, and measurable growth.
    // ===============================
    [
        // -------------------------------------------------
        // HERO / BANNER SECTION
        // -------------------------------------------------

        'name' => 'Social Media',
        'info' => 'Turn social platforms into active brand channels that build awareness, engagement, and action.',
        'heading' => 'Social Media',
        'slug' => 'social-media',
        'parent' => 'Services',
        'parentLink' => 'services',
        'breadcrumb' => 'Social Media',

        // -------------------------------------------------
        // BASIC SERVICE META
        // -------------------------------------------------

        'title' => 'Social Media',
        'description' => 'Social that builds attention — then keeps it.',

        // -------------------------------------------------
        // EXPERTISE SECTION
        // -------------------------------------------------

        'bannerImage' => 'assets/image/dummy-img-600x400.jpg',
        'bannerAlt' => 'Social Media Banner',

        'expertiseTitle' => 'Turn social channels into repeatable growth engines.',

        'expertiseDescription' => 'Social Media at Business Logo Experts blends creative storytelling, platform-first formats, and performance marketing to grow reach, leads, and loyalty. We design content systems, run campaigns that scale, and build communities that stick — all tied to measurable goals. Whether you need a social-first launch, ongoing content operations, or paid media that performs, we deliver a pragmatic program that moves KPIs.',

        'images' => [
            'assets/image/dummy-img-600x400.jpg',
            'assets/image/dummy-img-600x400.jpg',
            'assets/image/dummy-img-600x400.jpg',
            'assets/image/dummy-img-600x400.jpg'
        ],

        // -------------------------------------------------
        // PORTFOLIO SECTION (Tabs)
        // -------------------------------------------------

        'portfolioImages' => [
            'Strategy' => [
                'assets/image/dummy-img-600x400.jpg',
                'assets/image/dummy-img-600x400.jpg',
            ],
            'Content' => [
                'assets/image/dummy-img-600x400.jpg',
                'assets/image/dummy-img-600x400.jpg',
            ],
            'Ads' => [
                'assets/image/dummy-img-600x400.jpg',
                'assets/image/dummy-img-600x400.jpg',
            ],
            'Community' => [
                'assets/image/dummy-img-600x400.jpg',
                'assets/image/dummy-img-600x400.jpg',
            ],
            'Analytics' => [
                'assets/image/dummy-img-600x400.jpg',
                'assets/image/dummy-img-600x400.jpg',
            ],
        ],

        'portfolioContent' => [

            'Strategy' => 'Audience research, channel playbooks, content pillars, and campaign roadmaps that align social activity to business goals.',

            'Content' => 'Platform-first creative — short-form video, carousels, reels, and caption systems that are fast to produce and built to perform.',

            'Ads' => 'Paid social strategy, creative testing, and optimization across Meta, TikTok, LinkedIn, and X for scalable acquisition and retention.',

            'Community' => 'Community building, moderation, and engagement systems that turn followers into advocates and valuable feedback loops.',

            'Analytics' => 'Performance dashboards, attribution, and experiment roadmaps so every creative decision is evidence-driven.',

        ],

        // -------------------------------------------------
        // WHAT’S INCLUDED
        // -------------------------------------------------

        'includedPara' => 'A practical social program that ships results.',

        'included_1' => [
            'Social audit',
            'Content calendar',
            'Creative production',
            'Paid media setup',
        ],

        'included_2' => [
            'Community guidelines',
            'Repurposing system',
            'Analytics dashboard',
            'Quarterly reviews',
        ],

        // -------------------------------------------------
        // PRICING STRUCTURE
        // -------------------------------------------------

        'pricing' => [
            'title' => "Starter & Growth — scalable social programs",
            'plans' => [
                [
                    'name' => 'Starter',
                    'description' => 'Perfect for startups & small businesses',
                    'price' => '2,500',
                    'highlight' => false,
                    'features' => ['Basic SEO & Marketing', 'Social Media Management (1 Platform)', 'Monthly Performance Report']
                ],
                [
                    'name' => 'Growth',
                    'description' => 'Full scale marketing for maximum impact',
                    'price' => '7,500',
                    'highlight' => true,
                    'features' => ['Complete Digital Marketing Suite', 'Paid Ads Management', 'Dedicated Account Manager', 'Email Marketing & Automation', 'Weekly Performance insights'],
                    'coreBenefits' => [
                        ['icon' => 'fa-brain', 'text' => 'Dedicated Account Manager'],
                        ['icon' => 'fa-accessible-icon', 'text' => 'Priority Support 24/7', 'brand' => true],
                        ['icon' => 'fa-bug', 'text' => 'Customized Growth Strength']
                    ]
                ],
            ],
        ],

        // -------------------------------------------------
        // WHY CHOOSE US
        // -------------------------------------------------

        'whyChooseUs' => [
            'Channel-native creativity',
            'Fast iteration',
            'End-to-end delivery',
            'Data-first optimizations',
            'Brand-safe growth',
            'Playbooks that scale',
        ],

        // -------------------------------------------------
        // SIDEBAR BLOG + CTA
        // -------------------------------------------------

        'rightBlogTitle' => 'Featured article — Creative tests that actually move metrics on social',
        'rightBlogDes' => 'We share five creative experiments that consistently lower CAC and lift engagement across platforms.',

        'rightCTATitle' => 'Ready to turn social into a predictable channel?',
        'rightCTADes' => 'Book a free 30-minute strategy call — we’ll map a 90-day plan and quick experiments you can run next month.',

        // -------------------------------------------------
        // TESTIMONIALS
        // -------------------------------------------------

        'testimonials' => [
            [
                'name' => 'Lina Gomez',
                'position' => 'Head of Growth, Foundry Coffee',
                'description' => '“The launch creative cut through local noise and drove real footfall. Their cadence and testing framework made scaling obvious.”',
                'result' => '(Result: +35% same-store visits)',
                'image' => 'assets/image/dummy-img-400x400.jpg',
                'stars' => 5,
            ],
            [
                'name' => 'Ethan Park',
                'position' => 'Content Lead, SparkNotes Studio',
                'description' => '“Business Logo Experts helped us produce more and better content without blowing the budget — the editorial system is gold.”',
                'result' => '(Result: +50% weekly reach)',
                'image' => 'assets/image/dummy-img-400x400.jpg',
                'stars' => 5,
            ],
            [
                'name' => 'Rita Khalid',
                'position' => 'Marketing Manager, Atlas Health',
                'description' => '“The paid funnels they built consistently lowered our CPL while improving lead quality.”',
                'result' => '(Result: -28% CPL)',
                'image' => 'assets/image/dummy-img-400x400.jpg',
                'stars' => 5,
            ],
        ],

        // -------------------------------------------------
        // TESTIMONIAL SUMMARY
        // -------------------------------------------------

        'testimonialSummary' => [
            'avatars' => [
                'assets/image/dummy-img-400x400.jpg',
                'assets/image/dummy-img-400x400.jpg',
                'assets/image/dummy-img-400x400.jpg',
            ],
            'positiveReviews' => '300+ social',
            'reviewLabel' => 'campaigns launched',

            'stats' => [
                [
                    'value' => -28,
                    'suffix' => '%',
                    'label' => 'reduction in cost-per-lead after optimization',
                ],
                [
                    'value' => 50,
                    'suffix' => '%',
                    'label' => 'lift in organic reach with systematic content repurposing',
                ],
            ],

            'services' => [
                'Social Media Growth',
                'Performance Marketing',
            ]
        ],

        // -------------------------------------------------
        // MAIN CTA
        // -------------------------------------------------

        'mainCTATitle' => 'Short social experiments & creative playbooks',
        'mainCTADes' => 'Subscribe for monthly creative tests, ad copy hacks, and community playbooks you can try the next week.',

        // -------------------------------------------------
        // FAQ SECTION
        // -------------------------------------------------

        'faqs' => [
            [
                'question' => 'How often should we post?',
                'answer' => 'It depends on goals and channels. Typical cadences range from 3–5 posts/week for steady growth to daily content for aggressive audience-building. We’ll propose a cadence during discovery.',
            ],
            [
                'question' => 'Do you handle paid media budgets?',
                'answer' => 'We manage ad strategy, creative testing, and optimization. Media budgets are billed separately; we’ll propose a recommended test budget during planning.',
            ],
            [
                'question' => 'Can you work with our in-house creators?',
                'answer' => 'Yes — we integrate with internal teams or fully run content production and paid media depending on your preference.',
            ],
            [
                'question' => 'How do you measure success on social?',
                'answer' => 'KPIs vary by campaign: reach, engagement, CTR, CPL, conversion rate, and LTV. We align metrics to business goals during discovery.',
            ],
            [
                'question' => 'Do you offer community moderation?',
                'answer' => 'Yes — we provide moderation playbooks and can run moderation as a managed service for defined hours or SLAs.',
            ],
            [
                'question' => 'Will you repurpose our content across channels?',
                'answer' => 'Absolutely — we build repurposing systems so a single asset can fuel multiple formats and platforms efficiently.',
            ],
        ],
    ],

];
