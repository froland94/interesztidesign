<?php

declare(strict_types=1);

return [
    'title' => 'Privacy Policy',
    'last_update' => 'Last update: 2026. 01. 06',
    'intro_geo' => 'This Privacy Policy applies to citizens and legal residents of the European Economic Area and Switzerland.',

    'sections' => [
        'controller' => [
            'title' => '1. Data controller details',
            'name' => 'Data controller: :name',
            'contact' => 'Contact: :email',
            'website' => 'Website: :url',
        ],
        'purpose' => [
            'title' => '2. Purpose of data processing',
            'intro' => 'The purpose of data processing is:',
            'list' => [
                'making contact',
                'preliminary consultation',
                'responding to enquiries',
            ],
            'outro' => 'Filling in the form does not constitute a request for a quote and does not create a contractual relationship.',
        ],
        'scope' => [
            'title' => '3. Scope of processed personal data',
            'intro' => 'The following personal data are processed during the use of the form:',
            'mandatory' => [
                'title' => 'Mandatory data:',
                'list' => [
                    'name',
                    'email address',
                    'selected service',
                    'basic property details (address or area, type, floor area, number of rooms)',
                ],
            ],
            'optional' => [
                'title' => 'Optional data:',
                'list' => [
                    'phone nr.',
                    'further information, requirements, and ideas provided in the message',
                ],
            ],
        ],
        'legal_basis' => [
            'title' => '4. Legal basis for data processing',
            'content' => 'The legal basis for data processing is the voluntary consent of the data subject (GDPR article 6 (1) point (a)). Consent is given by submitting the form.',
        ],
        'storage' => [
            'title' => '5. Data storage and processing',
            'intro' => 'The submitted data:',
            'list' => [
                'arrive to the data controller in the form of an email',
                'are also stored on the website\'s administration interface',
            ],
            'processor' => 'Data processor: the hosting provider operating the website (WordPress.com / Automattic Inc.)',
            'extra' => 'Data storage primarily takes place within the European Union, however, due to the provider\'s infrastructure, data processing outside the EU may occur in certain cases. The provider applies appropriate safeguards (e.g. contractual terms) to ensure compliance with the GDPR.',
        ],
        'duration' => [
            'title' => '6. Duration of data processing',
            'intro' => 'Retention of personal data:',
            'list' => [
                'until the contact process is concluded',
                'or until the data subject requests their deletion, but for a maximum of 12 months',
            ],
        ],
        'access' => [
            'title' => '7. Parties with access to the data',
            'intro' => 'Personal data can only be accessed by:',
            'list' => [
                'the data controller',
                'and the data processors necessary for technical operation',
            ],
            'outro' => 'Data are not transferred to third parties for marketing or other purposes.',
        ],
        'rights' => [
            'title' => '8. Rights of data subjects',
            'intro' => 'The data subject is entitled to:',
            'list' => [
                'request information about the data processed about them',
                'request their rectification',
                'request their erasure',
                'request the restriction of data processing',
                'withdraw their consent at any time',
            ],
            'outro' => 'The withdrawal of consent does not affect the lawfulness of processing based on consent before its withdrawal.',
        ],
        'remedies' => [
            'title' => '9. Legal remedies',
            'content' => 'The data subject may lodge a complaint with the supervisory authority: Hungarian National Authority for Data Protection and Freedom of Information (NAIH)',
        ],
    ],
];
