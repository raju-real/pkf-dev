<?php

return [
	'mode'                  => 'utf-8',
	'format'                => 'A4',
    'default_font_size'          => '12',
    'default_font'               => '',
    'margin_left'                => 10,
    'margin_right'               => 10,
    'margin_top'                 => 5,
    'margin_bottom'              => 10,
    'margin_header'              => 10,
    'margin_footer'              => 10,
	'author'                => '',
	'subject'               => '',
	'keywords'              => '',
	'creator'               => 'Laravel Pdf',
	'display_mode'          => 'fullpage',
	'tempDir'               => base_path('../temp/'),
	'pdf_a'                 => false,
	'pdf_a_auto'            => false,
	'icc_profile_path'      => '',
	'font_path' => base_path('resources/fonts/'),
    'font_data' => [
        'bangla' => [
            'R'  => 'SolaimanLipi.ttf',    // regular font
            'B'  => 'SolaimanLipi.ttf',       // optional: bold font
            'I'  => 'SolaimanLipi.ttf',     // optional: italic font
            'BI' => 'SolaimanLipi.ttf', // optional: bold-italic font
            'useOTL' => 0xFF,   
            'useKashida' => 75, 
        ],
        'alpona' => [
            'R'  => 'AponaLohit.ttf',    // regular font
            'B'  => 'AponaLohit.ttf',       // optional: bold font
            'I'  => 'AponaLohit.ttf',     // optional: italic font
            'BI' => 'AponaLohit.ttf', // optional: bold-italic font
            'useOTL' => 0xFF,   
            'useKashida' => 75, 
        ],
        'nikosh' => [
            'R'  => 'Nikosh.ttf',    // regular font
            'B'  => 'Nikosh.ttf',       // optional: bold font
            'I'  => 'Nikosh.ttf',     // optional: italic font
            'BI' => 'Nikosh.ttf', // optional: bold-italic font
            'useOTL' => 0xFF,   
            'useKashida' => 75, 
        ],
        'nikosh_light' => [
            'R'  => 'NikoshLight.ttf',    // regular font
            'B'  => 'NikoshLight.ttf',       // optional: bold font
            'I'  => 'NikoshLight.ttf',     // optional: italic font
            'BI' => 'NikoshLight.ttf', // optional: bold-italic font
            'useOTL' => 0xFF,   
            'useKashida' => 75, 
        ]
        // ...add as many as you want.
    ]
];
