<?php
use common\widgets\Thumbnail;
use yii\helpers\Html;

echo Thumbnail::widget([
	'label'=>'testing', 
	'content'=>'Lorem ipsum dolor', 
	'bottom'=>[
		['name'=>'Button', 'value'=>['site/index'], ['class'=>'btn btn-default']],
		['name'=>'Button', 'value'=>['site/index'], ['class'=>'btn btn-default']],
		['name'=>'Button', 'value'=>['site/index'], ['class'=>'btn btn-default']]
	]
]);
?>