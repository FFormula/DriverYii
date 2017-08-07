<?php
    return [
        'id' => 'crmapp',
        'basePath' => realpath(__DIR__ . '/../'),
        'defaultController' => 'info/index',
        'components' => [
            'request' => [
                'cookieValidationKey' => 'super secret code'
            ],
            'db' => require(__DIR__ . '/db.php')
        ]
    ];
?>