<?php
use common\widgets\Thumbnail;
use yii\helpers\Html;

echo Thumbnail::widget([
	'label'=>'testing', 
	'content'=>'Lorem ipsum dolor', 
	'bottom'=>Html::button('Button', ['value'=>'testing', 'class'=>'btn btn-primary'])
]);
?>