<?php

declare(strict_types=1);

return [
    'title' => 'Contact me',
    'subtitle' => "Please fill out the form below. This doesn't involve any obligation; I simply use it to get in touch with you as efficiently as possible.",
    'form' => [
        'name' => 'Name',
        'email' => 'Email',
        'phone' => 'Phone number',
        'service' => 'Which service are you interested in?',
        'property' => 'Property details (address/area, type – house, flat, floor area, number of rooms)',
        'description' => 'Briefly describe the issues, needs, and ideas you have regarding your home.',
        'privacy' => 'I have read and accept the Privacy Policy.',
        'privacy_link_text' => 'You can read the <a href=":url" class="text-neutral-900 hover:underline font-medium">Privacy Policy</a> here.',
        'submit' => 'Send',
        'sending' => 'Sending...',
        'required' => '(required)',
        'success' => 'Thank you for your message! I will be in touch with you shortly.',
    ],
    'validation' => [
        'name_required' => 'Your name is required.',
        'email_required' => 'Your email address is required.',
        'email_invalid' => 'Please provide a valid email address.',
        'phone_invalid' => 'Please provide a valid phone number.',
        'property_required' => 'Property details are required.',
        'services_required' => 'Please select at least one service.',
        'privacy_required' => 'You must accept the Privacy Policy.',
    ],
    'mail' => [
        'subject' => 'New contact form message – :name',
        'heading' => 'New contact form message',
        'fields' => [
            'name' => 'Name',
            'email' => 'Email',
            'phone' => 'Phone number',
            'property' => 'Property details',
            'services' => 'Services of interest',
            'description' => 'Description',
        ],
    ],
];
