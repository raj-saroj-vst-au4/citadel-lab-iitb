<?php
/**
 * People of the lab, in four groups: leads, faculty, researchers, staff.
 *
 * To add someone, copy an entry and change its key (the key is also how
 * content/research.php names a project's investigators).
 *
 * 'photo' is the file name, without ".webp", in assets/img/people/. Build it
 * with tools/make_images.py. Use null when there is no picture: the page
 * shows the person's initials instead.
 */
return [

    'leads' => [
        'sudeep-bapat' => [
            'name'        => 'Prof. Sudeep Bapat',
            'role'        => 'Professor-in-Charge',
            'affiliation' => 'Assistant Professor, Shailesh J. Mehta School of Management, IIT Bombay',
            'unit'        => 'Shailesh J. Mehta School of Management',
            'photo'       => 'sudeep-bapat',
            'url'         => 'https://sites.google.com/view/srbapat/home',
            'links'       => [
                'Website'  => 'https://sites.google.com/view/srbapat/home',
                'LinkedIn' => 'https://www.linkedin.com/in/dr-sudeep-r-bapat-656796108/',
            ],
            'summary' => "Prof. Sudeep R. Bapat is an Assistant Professor in the Decision Sciences area at the Shailesh J. Mehta School of Management, Indian Institute of Technology Bombay. He had his schooling and undergraduate education in New Delhi. He obtained his Bachelor's degree in statistics from the University of Delhi, a Master's in Science in applied statistics and informatics from the Indian Institute of Technology, Bombay and Ph.D. from the University of Connecticut, USA in 2017.",
            'bio' => [
                'His thesis mainly concentrates on estimation problems under a sequential sampling strategy, which is beneficial under many practical real-world examples such as health studies, ecology, and finance. He later worked as a Visiting Assistant Professor in the Probability and Statistics Department of the University of California, Santa Barbara, and as an Assistant Professor at the Indian Institute of Management, Indore. His current research interests extend to other areas such as time series, censoring, change point detection, statistical psychology and statistical finance.',
                'Prof. Bapat is currently also an associated faculty with the Centre for Machine Intelligence and Data Science, the FedEx Centre for Advanced Logistics and Focused Analytics, the National Disease Modelling Consortium, and the Centre for Defence Technology Innovations and Strategies at IIT Bombay. He has presented talks as well as chaired and organized sessions in many reputed national and international conferences in statistics, over the years. He has written and published over 50 research papers in leading journals of the field.',
            ],
        ],
        'svd-nageswara-rao' => [
            'name'        => 'Prof. S.V.D. Nageswara Rao',
            'role'        => 'First Professor-in-Charge',
            'affiliation' => 'Shailesh J. Mehta School of Management, IIT Bombay',
            'unit'        => 'Shailesh J. Mehta School of Management',
            'photo'       => 'svd-nageswara-rao',
            'url'         => 'https://www.som.iitb.ac.in/sonti/',
            'links'       => [
                'Website'  => 'https://www.som.iitb.ac.in/sonti/',
                'LinkedIn' => 'https://www.linkedin.com/in/prof-s-v-d-nageswara-rao-bb36b8/',
            ],
            'summary' => 'As Head of Shailesh J. Mehta School of Management, he played a pivotal role in setting up the lab and establishing a strong foundation for cutting-edge research and innovation in finance. He helped foster collaborations between academia and industry, and enabled the lab to become a hub for advanced quantitative finance and data-driven problem solving.',
            'bio' => [
                'Prof. S.V.D. Nageswara Rao is the first Professor-in-Charge of the Lab. He received the doctoral title of Fellow of IIM Ahmedabad and served as a Senior Manager of ICRA Ltd., New Delhi. He is former Chairman of Metropolitan Stock Exchange of India, and also served as Independent Director on the boards of other companies. He was a consultant to leading companies and organizations like ICRA, L&T, Ashok Leyland, CBI, Traco Cables Company Ltd., MERC, and Power Exchange India Ltd. (PXIL).',
                'His areas of research interest include Corporate Finance, Investment Banking, Capital Markets, Mutual Funds, Corporate Governance, Financial Engineering, ESG Investing, and Corporate Social Responsibility. He has guided 21 Ph.D. scholars and 46 Masters dissertations, and is currently guiding 6 Ph.D. students. He has presented papers at national and international conferences, and published in reputed journals. He has conducted more than 40 short and long duration Management Development Programmes (MDPs) for executives from different companies, and senior government officials.',
            ],
        ],
    ],

    'faculty' => [
        'ankur-kulkarni' => [
            'name'      => 'Prof. Ankur Kulkarni',
            'unit'      => 'Centre for Systems and Control',
            'interests' => 'Finance and other socio-technical systems',
            'photo'     => 'ankur-kulkarni',
            'url'       => 'https://www.sc.iitb.ac.in/~ankur/',
        ],
        'avishek-ghosh' => [
            'name'      => 'Prof. Avishek Ghosh',
            'unit'      => 'Department of Computer Science and Engineering',
            'interests' => 'Theoretical machine learning, online learning and bandits, non-convex optimization, reinforcement learning',
            'photo'     => 'avishek-ghosh',
            'url'       => 'https://sites.google.com/view/avishekghosh/home',
        ],
        'ayan-bhattacharya' => [
            'name'      => 'Prof. Ayan Bhattacharya',
            'unit'      => 'Department of Mathematics',
            'interests' => 'Extreme value theory, stable processes, branching random walks, point processes, robust statistics',
            'photo'     => 'ayan-bhattacharya',
            'url'       => 'https://sites.google.com/site/bhattacharya90ayan',
        ],
        'harsha-hutridurga' => [
            'name'      => 'Prof. Harsha Hutridurga',
            'unit'      => 'Department of Mathematics',
            'interests' => 'Homogenization of differential equations, mathematical statistical mechanics, invisibility and meta-materials',
            'photo'     => 'harsha-hutridurga',
            'url'       => 'https://hutridurga.wordpress.com/',
        ],
        'k-suresh-kumar' => [
            'name'      => 'Prof. K. Suresh Kumar',
            'unit'      => 'Department of Mathematics',
            'interests' => 'Risk-sensitive control theory, stochastic control, mathematical finance',
            'photo'     => 'k-suresh-kumar',
            'url'       => 'https://www.math.iitb.ac.in/~suresh/',
        ],
        'ks-mallikarjuna-rao' => [
            'name'      => 'Prof. K.S. Mallikarjuna Rao',
            'unit'      => 'Industrial Engineering and Operations Research',
            'interests' => 'Game theory, stochastic control, probability, partial differential equations',
            'photo'     => 'ks-mallikarjuna-rao',
            'url'       => 'https://www.ieor.iitb.ac.in/~mallik/',
        ],
        'n-hemachandra' => [
            'name'      => 'Prof. N. Hemachandra',
            'unit'      => 'Industrial Engineering and Operations Research',
            'interests' => 'Machine learning, reinforcement learning, neural networks, Markov decision models, game theory',
            'photo'     => 'n-hemachandra',
            'url'       => 'https://www.ieor.iitb.ac.in/~nh',
        ],
        'parthe-pandit' => [
            'name'      => 'Prof. Parthe Pandit',
            'unit'      => 'Centre for Machine Intelligence and Data Science',
            'interests' => 'Machine learning, deep learning, statistics and optimization',
            'photo'     => 'parthe-pandit',
            'url'       => 'https://parthe.github.io/',
        ],
        'piyush-pandey' => [
            'name'      => 'Prof. Piyush Pandey',
            'unit'      => 'Shailesh J. Mehta School of Management',
            'interests' => 'Financial derivatives and investment management',
            'photo'     => 'piyush-pandey',
            'url'       => 'https://sites.google.com/iitb.ac.in/prof-piyush-pandey/home',
        ],
        'puja-padhi' => [
            'name'      => 'Prof. Puja Padhi',
            'unit'      => 'Department of Economics',
            'interests' => 'Financial and monetary economics, macroeconomics, financing economic development',
            'photo'     => 'puja-padhi',
            'url'       => 'https://www.economics.iitb.ac.in/puja.html',
        ],
        'radhendushka-srivastava' => [
            'name'      => 'Prof. Radhendushka Srivastava',
            'unit'      => 'Department of Mathematics',
            'interests' => 'Statistical signal processing, high-dimensional data, sparse regression, change point detection',
            'photo'     => 'radhendushka-srivastava',
            'url'       => 'https://sites.google.com/iitb.ac.in/radhendushka/bio',
        ],
        'ramesh-kuruva' => [
            'name'      => 'Prof. Ramesh Kuruva',
            'unit'      => 'Desai Sethi School of Entrepreneurship',
            'interests' => 'Fintech, entrepreneurial finance, startup ecosystem and venture funding',
            'photo'     => 'ramesh-kuruva',
            'url'       => 'https://www.dsse.iitb.ac.in/people/ramesh-kuruva',
        ],
        'rohan-chinchwadkar' => [
            'name'      => 'Prof. Rohan Chinchwadkar',
            'unit'      => 'Shailesh J. Mehta School of Management',
            'interests' => 'Artificial intelligence in finance, with a focus on LLMs and agentic AI',
            'photo'     => 'rohan-chinchwadkar',
            'url'       => 'https://www.linkedin.com/in/rohanchinchwadkar/',
        ],
        's-baskar' => [
            'name'      => 'Prof. S. Baskar',
            'unit'      => 'Department of Mathematics',
            'interests' => 'Numerical analysis of partial differential equations, hyperbolic conservation laws, Hamilton–Jacobi equations, physics-informed deep learning (PINNs)',
            'photo'     => 's-baskar',
            'url'       => 'https://www.math.iitb.ac.in/~baskar/',
        ],
        'svd-nageswara-rao' => [
            'name'      => 'Prof. S.V.D. Nageswara Rao',
            'unit'      => 'Shailesh J. Mehta School of Management',
            'interests' => 'Corporate finance, capital markets, financial engineering, ESG investing',
            'photo'     => 'svd-nageswara-rao',
            'url'       => 'https://www.som.iitb.ac.in/sonti/',
        ],
    ],

    'researchers' => [
        'anshul-pawaskar' => [
            'name'  => 'Anshul Pawaskar',
            'role'  => 'Ph.D. student',
            'about' => 'Brings together computer engineering, artificial intelligence and financial markets, with experience as a quantitative developer. Studies how computational methods and AI can be applied to financial data to understand market behavior, identify meaningful patterns, and develop systematic approaches to investing and trading. Research interests include computational finance, quantitative finance and algorithmic trading, with a broader focus on using technology and data to develop innovative approaches to financial markets.',
            'photo' => 'anshul-pawaskar',
        ],
        'aryan-bhambu' => [
            'name'  => 'Aryan Bhambu',
            'role'  => 'Postdoctoral researcher',
            'about' => 'Exploring quantitative finance through data-driven modeling, algorithmic strategies, and computational methods to develop insights for financial markets and investment decision-making.',
            'photo' => 'aryan-bhambu',
            'link'  => ['GitHub' => 'https://github.com/aryanbhambu'],
        ],
        'ashish-kela' => [
            'name'  => 'Ashish Kela, CFA',
            'role'  => 'Ph.D. student',
            'about' => 'Developing multi-asset portfolio construction methodologies that are robust, adaptive, and more closely aligned with real-world investment objectives.',
            'photo' => 'ashish-kela',
        ],
        'salam-rabindrajit-luwang' => [
            'name'  => 'Salam Rabindrajit Luwang',
            'role'  => 'Postdoctoral researcher',
            'about' => 'High-frequency financial markets, focusing on market microstructure and order flow. Current work incorporates news sentiment.',
            'photo' => 'salam-rabindrajit-luwang',
            'link'  => ['Homepage' => 'https://srabindrajitluwang.github.io/index.html'],
        ],
        'sayar-ahmad-shah' => [
            'name'  => 'Dr. Sayar Ahmad Shah',
            'role'  => 'Postdoctoral researcher',
            'about' => 'Modeling asset portfolio allocation through stochastic general equilibrium frameworks, focusing on asset returns and interest rates to derive policy insights.',
            'photo' => 'sayar-ahmad-shah',
            'link'  => ['Homepage' => 'https://sites.google.com/iitrpr.ac.in/sayar?pli=1'],
        ],
    ],

    'staff' => [
        'varsha-reddy-manne' => [
            'name'  => 'Varsha Reddy Manne',
            'role'  => 'Program Manager',
            'photo' => 'varsha-reddy-manne',
        ],
        'salman-shaikh' => [
            'name'  => 'Mohd Salman Shaikh',
            'role'  => 'Technical Assistant',
            'photo' => 'salman-shaikh',
        ],
    ],
];
