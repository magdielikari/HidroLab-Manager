<?php
$params = array_merge(
	require(__DIR__ . '/../../common/config/params.php'),
	require(__DIR__ . '/../../common/config/params-local.php'),
	require(__DIR__ . '/params.php'),
	require(__DIR__ . '/params-local.php')
);

return [
	'id' => 'app-backend',
	'basePath' => dirname(__DIR__),
	'controllerNamespace' => 'backend\controllers',
	'bootstrap' => ['log'],
	'modules' => [
		'admin'=>[
			'class'=>'backend\modules\admin\Module'
		]
	],
	'components' => [
		'urlManager'=> [
			'class'=>'yii\web\UrlManager',
			'enablePrettyUrl'=>true,
			'showScriptName'=>false
		],
		'assetManager'=>[
			'bundles'=>[
				'yii\bootstrap\BootstrapAsset'=>[
					'basePath'=>'@webroot',
					'baseUrl'=>'@web',
					'css'=>['css/bootstrap.css']
				],
			],
		],
		'user' => [
			'identityClass' => 'common\models\User',
			'enableAutoLogin' => true,
		],
		'response'=>[
			'formatters'=>[
				'pdf'=>[
					'class'=>'robregonm\pdf\PdfResponseFormatter'
				]
			]
		],
		'log' => [
			'traceLevel' => YII_DEBUG ? 3 : 0,
			'targets' => [
				[
					'class' => 'yii\log\FileTarget',
					'levels' => ['error', 'warning'],
				],
			],
		],
		'errorHandler' => [
			'errorAction' => 'site/error',
		],
	],
	'params' => $params,
];
