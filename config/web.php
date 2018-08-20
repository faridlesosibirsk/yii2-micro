<?php

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'pdtxrk6VVh-CJI2hOnuFwlYfAWkHguGl',
        ],
    ],
];

return $config;
