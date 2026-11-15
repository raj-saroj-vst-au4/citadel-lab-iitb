<?php
/**
 * Events.
 *
 * 'upcoming' entries need: id, title, date (YYYY-MM-DD), venue and summary.
 * Everything else is optional: end_date, kind, logo, partner, url, links,
 * schedule, themes, deadlines, email. An upcoming event disappears from the
 * site by itself the day after its last date; move it to 'past' (with
 * photographs) when there is something to show. While the list is empty the
 * Events page says that nothing is scheduled.
 *
 * 'past' entries are shown in the order written; put the newest first.
 * Photos are files in assets/img/photos/ (without ".webp") and 'shape' is
 * "wide" or "tall".
 */
return [

    'intro' => 'Workshops, seminars, conferences and research events at the IITB-Citadel Securities Quantitative Research Lab.',

    'upcoming' => [
        // Content from https://qrdconference.com/ (November 2026).
        [
            'id'         => 'qrd-2027',
            'title'      => 'Conference on Quant, Risk & Data',
            'short'      => 'QRD 2027',
            'kind'       => 'Conference',
            'date'       => '2027-03-04',
            'end_date'   => '2027-03-06',
            'venue'      => 'Victor Menezes Convention Centre (VMCC), IIT Bombay, Mumbai',
            'venue_short' => 'VMCC, IIT Bombay, Mumbai',
            'logo'       => 'qrd-logo',
            'partner'    => ['name' => 'RTQF, IISc Bangalore', 'url' => 'https://sites.google.com/view/rtqf2026/home'],
            'teaser'     => 'The conference opens with a day of pre-conference workshops, followed by two days of keynotes, parallel sessions, and poster presentations, hosted by the lab at IIT Bombay.',
            'summary'    => 'The Conference on Quant, Risk & Data (QRD 2027) will bring together researchers, academics, and industry professionals working in mathematical finance, financial econometrics, statistical learning, computational intelligence, and quantitative risk analytics. It will provide a forum to present original research, discuss emerging challenges in financial markets, and connect theoretical advances with practical applications.',
            'audience'   => 'Researchers, students, and practitioners working on quantitative finance, risk, and data: from stochastic modelling and financial econometrics to market microstructure, portfolio optimisation, and computational finance.',
            'url'        => 'https://qrdconference.com/',
            'links'      => [
                'Call for papers' => 'https://qrdconference.com/call-for-papers.php',
                'Programme'       => 'https://qrdconference.com/programme.php',
                'Workshops'       => 'https://qrdconference.com/workshops.php',
                'Registration'    => 'https://qrdconference.com/registration.php',
            ],
            'schedule' => [
                ['date' => '2027-03-04', 'title' => 'Pre-conference workshops', 'time' => '09:30 AM – 05:00 PM',
                 'text' => 'Two workshops, one on high-frequency trading and the other on derivative pricing, will run concurrently according to the same schedule. Participants may register for only one workshop.'],
                ['date' => '2027-03-05', 'title' => 'Main conference', 'time' => '08:30 AM – 05:30 PM',
                 'text' => 'Featuring the first keynote, four parallel technical session slots, poster presentations during lunch and tea breaks, a parallel paper presentation session, and a panel discussion. The evening concludes with a cultural event and a gala dinner.'],
                ['date' => '2027-03-06', 'title' => 'Main conference', 'time' => '09:00 AM – 05:30 PM',
                 'text' => 'Featuring the second keynote, four parallel technical session slots, poster presentations during lunch and tea breaks, two slots of parallel paper presentation sessions, and the valedictory session.'],
            ],
            'themes' => [
                'Stochastic Modelling, Derivative Markets, and Financial Engineering'          => 'Stochastic calculus, derivative valuation, rough volatility, structured products, and pricing techniques.',
                'Financial Econometrics, Statistical Learning, and Time Series Analysis'       => 'Econometric forecasting, volatility estimation, high-dimensional statistics, causal inference, regime switching, and time-series analysis.',
                'Market Microstructure, High-Frequency and Quantitative Trading'               => 'Order-book dynamics, market making, liquidity modelling, execution strategies, and algorithmic trading.',
                'Portfolio Optimisation, Asset Pricing, and Quantitative Investment Strategies' => 'Factor investing, asset allocation, robust portfolios, systematic investing, stochastic optimisation, investment decision-making.',
                'Computational Intelligence and High-Performance Computing in Finance'         => 'Deep learning, large language models, reinforcement learning, Monte Carlo methods, GPU computing, and quantum finance.',
                'Risk Modelling, Financial Stability, and Emerging Market Dynamics'            => 'Tail risk, systemic risk, financial regulation, Indian markets, climate finance, FinTech, and digital assets.',
            ],
            // label => date. Shown in date order; past dates are marked closed.
            'deadlines' => [
                'Conference papers (PDF)'        => '2026-12-20',
                'Poster abstracts'               => '2027-01-15',
                'Early-bird registration closes' => '2027-02-10',
                'Regular registration closes'    => '2027-02-25',
            ],
            'email' => 'info@qrdconference.com',
        ],
    ],

    'past' => [
        [
            'title'    => 'Research Symposium',
            'kind'     => 'Symposium',
            'date'     => '2026-04-07',
            'venue'    => 'SOM Auditorium, IIT Bombay',
            'summary'  => 'The lab successfully organized a Research Symposium, an event aimed at advancing quantitative finance through strong industry–academic collaboration. Held on April 7, 2026, at the SOM Auditorium, the symposium featured exciting talks by three IIT Bombay faculty members, Profs. Piyush Pandey, Ankur Kulkarni, and Parthe Pandit, who shared insights on topics such as market microstructure, risk management, and data-driven financial modelling, fostering meaningful dialogue and knowledge exchange in the field.',
            'speakers' => ['Prof. Piyush Pandey', 'Prof. Ankur Kulkarni', 'Prof. Parthe Pandit'],
            'photos'   => [
                ['file' => 'symposium-2-1100', 'shape' => 'wide', 'alt' => 'A speaker at the lectern gestures towards a slide showing two textbooks.'],
                ['file' => 'symposium-1-1100', 'shape' => 'wide', 'alt' => 'The audience seated in the auditorium.'],
                ['file' => 'symposium-3-1100', 'shape' => 'wide', 'alt' => 'A speaker presents beside a projected slide.'],
                ['file' => 'symposium-4-760',  'shape' => 'tall', 'alt' => 'A speaker at the lectern with a slide of notes behind.'],
                ['file' => 'symposium-5-760',  'shape' => 'tall', 'alt' => 'A speaker is handed a memento on stage.'],
                ['file' => 'symposium-6-760',  'shape' => 'tall', 'alt' => 'A speaker receives a memento on stage.'],
                ['file' => 'symposium-7-760',  'shape' => 'tall', 'alt' => 'A speaker receives a memento in front of a slide that reads “Thank you”.'],
            ],
        ],
    ],
];
