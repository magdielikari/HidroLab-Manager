<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'i18n' => [
        	'translations' => [
            	'models' => [
                	'class' => 'yii\i18n\PhpMessageSource',
                	'basePath' => '@app/messages',
                	'sourceLanguage' => 'es-MX',
                	'fileMap' => [
                   		'models' => 'models.php',
                    	'models/error' => 'error.php',
                	],
            	],
        	],
    	],
    ],
];
