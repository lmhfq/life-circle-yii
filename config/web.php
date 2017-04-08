<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'cDJb9h-hxWLaXoc8HKLMxe2zO0ipinFi',
        ],
        'redis' => require(__DIR__ . '/redis.php'),

        'cache' => [
            //class' => 'yii\caching\FileCache',
            'class' => 'yii\redis\Cache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                    'logVars' => []
                ],
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['info'],
                    'logVars' => []
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
        ///////////////////////自定义URL///////////////////////////////
        'urlManager' => [
            'enablePrettyUrl' => true,
            'enableStrictParsing' => false,
            'showScriptName' => false,
            //'suffix' => '.json',//后缀
            'rules' => require(__DIR__ . '/routes.php'),
        ],
        /////////////////////////////////


    ],
    'params' => $params,

    /////////////////自定义模块////////////////////////////////////
    'modules' => [
        'wap' => [
            'class' => 'app\modules\wap\Index',
        ],
    ],
    /////////////////////////////////
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        'allowedIPs' => ['127.0.0.1', '::1', '192.168.*.*'] // 按需调整这里
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        'allowedIPs' => ['127.0.0.1', '::1', '192.168.*.*'] // 按需调整这里
    ];
}

return $config;
