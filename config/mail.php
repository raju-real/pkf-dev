<?php
$jsonString = file_get_contents('assets/json/smtp.json');
$smtp_info = json_decode($jsonString,true);

return [

    'default' => env('MAIL_MAILER', 'smtp'),

    'mailers' => [
        'smtp' => [
            'transport' => $smtp_info['mail_driver'],
            'host' => $smtp_info['mail_host'],
            'port' => $smtp_info['mail_port'],
            'encryption' => $smtp_info['mail_encryption'],
            'username' => $smtp_info['mail_username'],
            'password' => $smtp_info['mail_password'],
            'timeout' => null,
            'auth_mode' => null,
        ],

        'ses' => [
            'transport' => 'ses',
        ],

        'mailgun' => [
            'transport' => 'mailgun',
        ],

        'postmark' => [
            'transport' => 'postmark',
        ],

        'sendmail' => [
            'transport' => 'sendmail',
            'path' => '/usr/sbin/sendmail -bs',
        ],

        'log' => [
            'transport' => 'log',
            'channel' => env('MAIL_LOG_CHANNEL'),
        ],

        'array' => [
            'transport' => 'array',
        ],
    ],


    'from' => [
        'address' => $smtp_info['mail_from'],
        'name' => $smtp_info['from_name'],
    ],

    /*
    |--------------------------------------------------------------------------
    | Markdown Mail Settings
    |--------------------------------------------------------------------------
    |
    | If you are using Markdown based email rendering, you may configure your
    | theme and component paths here, allowing you to customize the design
    | of the emails. Or, you may simply stick with the Laravel defaults!
    |
    */

    'markdown' => [
        'theme' => 'default',

        'paths' => [
            resource_path('views/vendor/mail'),
        ],
    ],

];
