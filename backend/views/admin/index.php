<?php

use yii\grid\GridView;
use yii\bootstrap\Html;
use yii\bootstrap\Alert;
use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = Yii::t('app', 'Admin');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="role-index">
	<h1><?= Html::encode($this->title) ?></h1>

    <?= HTml::a(Yii::t('app', 'Create permission'), ['create-permissions'], ['class'=>'btn btn-success']) ?>
	<?= HTml::a(Yii::t('app', 'Assign'), ['assign'], ['class'=>'btn btn-success']) ?>

	<?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            'description',

            [
                'class' => 'yii\grid\ActionColumn',
                'buttons'=>[
                    'delete'=>function($url, $model, $key){
                        $url = Url::to(['delete', 'name'=>$model->name]);
                        
                        return Html::a(Html::icon('trash'), $url, [
                            'data-pjax'=>0,
                            'data-method'=>'post',
                            'data-confirm'=>Yii::t('app', 'Are you sure you want to delete this item?'),
                            'aria-label'=>'Delete',
                            'title'=>'Delete'
                        ]);
                    }
                ]
            ],
        ],
    ]); ?>

</div>