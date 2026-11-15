<?php
/**
 * Academic programs. Each one is a panel on the page plus a details dialog.
 *
 *   facts      label => value, the short figures shown on the panel
 *   highlights short list shown on the panel
 *   intro      first paragraph of the dialog
 *   sections   headed lists in the dialog
 *   tracks     alternative eligibility routes, each with its own application
 *              link, shown as tabs (leave empty for a single route)
 *   notes      label => paragraph, shown after the eligibility lists
 *   warning    one line shown in bold
 *   apply      application links when there are no tracks
 */
return [

    'phd' => [
        'name'       => 'Ph.D. Fellowship',
        'status'     => 'Applications open',
        'summary'    => 'Advanced research opportunities for Ph.D. students exploring complex financial systems.',
        'facts'      => [
            'Fellowship'     => 'Competitive, paid monthly',
            'Research grant' => '₹1,00,000 a year',
            'Covers'         => 'Tuition, research expenses and living costs',
        ],
        'highlights' => [
            'Research fellowship',
            'Publication opportunities',
            'Advanced training in identified areas',
        ],
        'intro'    => 'The Lab supports highly motivated Ph.D. students and Post-Doctoral Fellows (PDFs). The Ph.D. students will receive competitive monthly fellowship and annual research grant of ₹1,00,000 to cover research related expenses. The PDFs will receive monthly salary as per existing institute rules in addition to campus housing subject to availability.',
        'sections' => [
            [
                'heading' => 'Benefits',
                'items'   => [
                    'Funding: the fellowship covers tuition, research related expenses, and living costs.',
                    'Annual research grants: to cover research related expenses and conference travel.',
                    'Professional development: access to workshops, seminars, and support from industry leaders.',
                    'Mentorship: guidance from experienced faculty members and industry professionals.',
                ],
            ],
        ],
        'tracks_heading' => 'Eligibility (meet at least one)',
        'tracks' => [
            'indian' => [
                'label' => 'Indian candidates',
                'items' => [
                    'Four year Bachelor in any discipline with 60% marks/6.5 CPI (55%/6.0 CPI for SC/ST) and at least two years work experience.',
                    'Master in any discipline (MBA/M.Tech./M.S./M.Sc./M.A./M.Com./MCA/LLM/M.Pharm./M.Phil., etc.) or 2 year PG Diploma in Management from institutions/universities.',
                    'Executive MBA of at least one year duration from IITs/IIMs.',
                    "CA/CMA/CS with 60%/6.5 CPI (55%/6.0 CPI for SC/ST) in the preceding degree/Bachelor's (B.Sc./B.Com./BA).",
                ],
                'apply' => ['label' => 'Apply as an Indian candidate', 'url' => 'https://portal.iitb.ac.in/phdapp/phdAdmissionLinks.jsp'],
            ],
            'foreign' => [
                'label' => 'Foreign candidates',
                'items' => [
                    'Four year Bachelor degree with 60% marks or 6.5 CPI and two years work experience, or Masters in any discipline with 60% marks or 6.5 CPI.',
                    'The candidate should have a valid TOEFL score.',
                ],
                'apply' => ['label' => 'Apply as a foreign candidate', 'url' => 'http://www.ir.iitb.ac.in/?page_id=26'],
            ],
        ],
        'notes' => [
            'Research proposal' => 'A detailed research proposal covering introduction, literature review, research gaps, research objectives, questions or hypotheses, and research design (variables, data, period, methodology, etc.) should be submitted along with the application.',
            'Research interest' => 'A demonstrated interest or experience in quantitative finance, or related areas, is desirable.',
        ],
        'warning' => 'Applications without a research proposal will not be considered.',
        'apply'   => [],
    ],

    'postdoc' => [
        'name'       => 'Post-Doctoral Research',
        'status'     => 'No last date for applications',
        'summary'    => 'These fellowships are open to established scholars pushing the boundaries of research in financial markets.',
        'facts'      => [
            'Salary'            => '₹80,000 a month, plus HRA',
            'Contingency grant' => '₹1,00,000 a year',
            'Tenure'            => 'Two years, extendable to a third',
        ],
        'highlights' => [
            'Independent research leadership',
            'Industry collaboration projects',
            'Access to proprietary databases',
        ],
        'intro'    => 'Post-Doctoral fellowships are available in the IITB-Citadel Securities Quantitative Research Lab. The tenure of Post-Doctoral Fellows (PDF) would be generally for two years (initially for one year and extendable for another year, subject to a satisfactory academic performance in the first year). There is a possibility for extension for the third year in exceptional cases.',
        'sections' => [
            [
                'heading' => 'Benefits',
                'items'   => [
                    'Non-lapsable contingency grant of ₹1,00,000 per annum.',
                    'Consolidated salary of ₹80,000 per month with HRA as per Government of India norms (currently 27% of consolidated salary).',
                ],
            ],
            [
                'heading' => 'Eligibility and evaluation',
                'items'   => [
                    'Candidates who wish to be considered for such an appointment may be fresh PhDs, or PhDs with less than two years of experience, or research scholars who have submitted their thesis and are awaiting examination.',
                    'Candidates should be preferably below 32 years of age.',
                    'Academic units will evaluate these applications through a process similar to that of faculty selections.',
                    'The Search Committees meet regularly to consider the applications and arrange for invited seminars and/or interviews as the need arises.',
                    'There is no last date for applications.',
                    "IIT Bombay's own PhD students are not eligible for this position.",
                ],
            ],
            [
                'heading' => 'Duties and facilities',
                'items'   => [
                    'A PDF will have a mentor whose area is closest to that of the PDF.',
                    'In addition to research, the Head of the Academic units may assign reasonable academic/administrative tasks depending on the need.',
                    'Financial support is provided for one international conference during the tenure of the fellowship for the presentation of their research work done at IIT Bombay.',
                    'Support for one national conference per year is also provided.',
                ],
            ],
        ],
        'tracks_heading' => '',
        'tracks'  => [],
        'notes'   => [],
        'warning' => '',
        'apply'   => [
            ['label' => 'Apply for the fellowship', 'url' => 'https://portal.acr.iitbombay.org/job-listing/804694835479855672'],
        ],
    ],
];
