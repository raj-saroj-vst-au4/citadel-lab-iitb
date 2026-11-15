<?php
/**
 * Site-wide details: name, navigation, address, phone numbers, emails.
 * Edit the values here; every page reads them from this file.
 */
return [
    'name'        => 'IITB–Citadel Securities Quantitative Research Lab',
    'name_plain'  => 'IITB-Citadel Securities Quantitative Research Lab',
    'url'         => 'https://www.som.iitb.ac.in/citadel/',
    'tagline'     => "A transformative collaboration to advance research and innovation in India's banking and financial markets.",
    'description' => 'A transformative collaboration between IIT Bombay and Citadel Securities advancing research in quantitative finance, algorithmic trading, and financial technology in India.',

    // page file (without .php) => label in the menu. 'home' is index.php.
    'nav' => [
        'home'     => 'Home',
        'about'    => 'About',
        'research' => 'Research',
        'programs' => 'Academic Programs',
        'people'   => 'People',
        'events'   => 'Events',
        'contact'  => 'Contact',
    ],

    // The announcement card on the home page. Set to null to hide it.
    'notice' => [
        'title' => 'PhD Fellowship Enrollment Open',
        'badge' => 'Enrolling',
        'text'  => 'Join our doctoral program in Financial Markets with prestigious fellowship opportunities',
        'page'  => 'programs',
        'anchor' => 'phd',
    ],

    'address' => [
        'Citadel Lab, 3rd Floor, Monash',
        'IIT Bombay, Powai',
        'Mumbai, Maharashtra 400076',
    ],
    // The same address in parts, for search engines.
    'postal' => [
        'street'   => 'Citadel Lab, 3rd Floor, Monash, IIT Bombay, Powai',
        'locality' => 'Mumbai',
        'region'   => 'Maharashtra',
        'code'     => '400076',
        'country'  => 'IN',
    ],

    // address => who reads it
    'emails' => [
        'pic.citadel@iitb.ac.in'    => 'Professor-in-Charge',
        'sudeepb@iitb.ac.in'        => 'Prof. Sudeep Bapat',
        'office.citadel@iitb.ac.in' => 'Lab office',
    ],

    'phones' => [
        ['label' => 'PIC Office',    'display' => '+91 22 2576 7145',        'tel' => '+912225767145'],
        ['label' => 'SJMSOM Office', 'display' => '+91 22 2576 7781 / 7782', 'tel' => '+912225767781'],
    ],
    // The number shown in the footer of every page.
    'footer_phone' => ['display' => '+91 22 2576 7782', 'tel' => '+912225767782'],

    'map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d657.005503299079!2d72.91901442909592!3d19.1330717642829!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c7f5a450579d%3A0x30fe0e3300571a5c!2sIITB%20MONASH%20RESEARCH%20ACADEMY!5e1!3m2!1sen!2sin!4v1766126737160!5m2!1sen!2sin',
    'map_link'  => 'https://www.google.com/maps/search/?api=1&query=IITB+Monash+Research+Academy%2C+IIT+Bombay',

    // value => label. The values are whitelisted in assets/php/contact-handler.php:
    // adding one here means adding it there too.
    'inquiry_types' => [
        'research' => 'Research Collaboration',
        'program'  => 'Academic Programs',
        'industry' => 'Industry Partnership',
        'media'    => 'Media Inquiry',
        'other'    => 'Other',
    ],
];
