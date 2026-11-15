<?php
/**
 * Research areas and research projects.
 *
 * 'image' is a file in assets/img/areas/ or assets/img/projects/, without
 * ".webp" (built by tools/make_images.py). A project's 'team' names people by
 * their key in content/people.php.
 */
return [

    'intro' => 'The IIT Bombay-Citadel Securities Quantitative Research Lab focuses on pioneering research covering all areas of quantitative finance.',

    'areas' => [
        'quantitative-finance' => [
            'name'    => 'Quantitative Finance',
            'teaser'  => 'Sophisticated models for pricing of securities, and investment management.',
            'summary' => 'The research in quantitative finance focuses on developing models to examine and analyze financial markets to make informed investment decisions.',
            'topics'  => [
                'Sophisticated models for pricing of securities, and algorithmic trading',
                'Statistical arbitrage',
                'Derivative pricing and hedging strategies',
                'Portfolio optimization',
            ],
            'focus' => [
                'Mathematical Modeling' => 'Developing sophisticated mathematical frameworks to model financial markets, asset pricing, and portfolio optimization.',
                'Statistical Arbitrage' => 'Researching novel statistical techniques to identify and exploit market inefficiencies across various asset classes and markets.',
                'Derivative Pricing'    => 'Advancing models for pricing complex derivatives and structured products in the Indian financial markets context.',
            ],
            'image' => 'quantitative-finance',
            'alt'   => 'A desk with several monitors showing price charts, a keyboard, notebooks and an open textbook.',
        ],
        'algorithmic-trading' => [
            'name'    => 'Algorithmic Trading',
            'teaser'  => 'Computational methods for high frequency trading strategies and execution.',
            'summary' => 'The research in algorithmic trading focuses on developing sophisticated trading strategies using computational methods and market microstructure analysis.',
            'topics'  => [
                'High-frequency trading systems',
                'Market microstructure analysis',
                'Execution of algorithms and optimization',
                'Latency-sensitive trading infrastructure',
            ],
            'focus' => [
                'High-Frequency Trading Systems' => 'Researching ultra-low latency systems and algorithms capable of making trading decisions in microseconds while maintaining market fairness.',
                'Market Microstructure Analysis' => 'Studying the dynamics of order books, market impact, and liquidity formation in Indian markets to improve execution strategies.',
                'Trading Infrastructure'         => 'Designing robust, high-performance computing systems optimized for financial applications and algorithmic trading.',
            ],
            'image' => 'algorithmic-trading',
            'alt'   => 'The words “Algo Trading” over a dark blue candlestick chart.',
        ],
        'financial-technology' => [
            'name'    => 'Financial Technology (FinTech)',
            'short'   => 'Financial Technology',
            'teaser'  => 'Disruptive technologies transforming banking and financial markets.',
            'summary' => 'The fintech research explores disruptive technologies that are transforming banking and financial markets, creating more efficient and accessible financial services.',
            'topics'  => [
                'Blockchain and distributed ledger technologies',
                'AI/ML in financial services',
                'Natural language processing for market intelligence',
                'Digital payments infrastructure and financial inclusion',
            ],
            'focus' => [
                'Blockchain Applications'     => 'Investigating practical applications of blockchain and distributed ledger technologies for improving clearing and settlement systems, enhancing transparency, and reducing counterparty risk.',
                'AI in Finance'               => 'Developing advanced machine learning models for credit scoring, fraud detection, customer service, and personalized financial recommendations.',
                'Digital Financial Inclusion' => 'Creating innovative solutions to extend financial services to underbanked populations leveraging mobile technology and digital payment systems.',
            ],
            'image' => 'financial-technology',
            'alt'   => 'Hands touching glowing currency symbols, charts and payment icons spread over a world map.',
        ],
        'risk-analytics' => [
            'name'    => 'Risk Analytics',
            'teaser'  => 'Sophisticated models for measuring and mitigating financial risks.',
            'summary' => 'The risk analytics research aims to develop sophisticated models for measuring, managing, and mitigating financial risks across various market conditions.',
            'topics'  => [
                'Predictive models for market risk',
                'Credit risk assessment',
                'Systemic risk monitoring',
                'Stress testing frameworks for financial institutions',
            ],
            'focus' => [
                'Predictive Risk Modeling'     => 'Building sophisticated models to forecast market volatility, identify potential stress points, and predict emerging risks in financial markets.',
                'Systemic Risk Analysis'       => 'Developing frameworks to monitor and assess systemic risks in interconnected financial networks, with a focus on the Indian financial system.',
                'Stress Testing Methodologies' => 'Creating comprehensive stress testing frameworks to evaluate the resilience of financial institutions under various adverse scenarios.',
            ],
            'image' => 'risk-analytics',
            'alt'   => 'Hands pointing at glowing charts and data dashboards under the words “Risk Analytics”.',
        ],
    ],

    'projects_intro' => 'Current research initiatives advancing quantitative finance and financial technology',

    'projects' => [
        [
            'title' => 'Pricing Options and Computing Implied Volatilities: A Machine Learning Approach',
            'team'  => ['PI' => ['piyush-pandey'], 'Co-PI' => ['sudeep-bapat']],
            'image' => 'project-1',
        ],
        [
            'title' => 'Social Media and IPOs: An Empirical and Mathematical Study',
            'team'  => ['PI' => ['ankur-kulkarni'], 'Co-PI' => ['parthe-pandit']],
            'image' => 'project-2',
        ],
        [
            'title' => 'Competitive Markets – A Multiagent Bandits Viewpoint',
            'team'  => ['PI' => ['avishek-ghosh']],
            'image' => 'project-3',
        ],
        [
            'title' => 'Deep Learning American Puts: A Neural Approach to Optimal Stopping and Option Pricing',
            'team'  => ['PI' => ['s-baskar'], 'Co-PI' => ['harsha-hutridurga', 'k-suresh-kumar']],
            'image' => 'project-4',
        ],
        [
            'title' => 'Modelling Order Flow Toxicity and Liquidity in High-Frequency Markets',
            'team'  => ['PI' => ['piyush-pandey']],
            'image' => 'project-5',
        ],
        [
            'title' => 'Change Point Detection in High Frequency Financial Time Series Data',
            'team'  => ['PI' => ['piyush-pandey'], 'Co-PI' => ['radhendushka-srivastava']],
            'image' => 'project-6',
        ],
    ],
];
