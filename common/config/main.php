<?php
return [
    'aliases' => [
        '@bower' => '@vendor/demokn/yii2-composer-asset/bower/node_modules',
        '@npm' => '@vendor/demokn/yii2-composer-asset/npm/node_modules',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => \yii\caching\FileCache::class,
        ],
    ],
];
