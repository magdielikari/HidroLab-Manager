<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Json;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\MuestrasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */


$this->params['breadcrumbs'][] = $this->title;
?>
<div class="muestras-index">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
     <?= Html::button(Yii::t('models', 'Create Muestra'), ['data-dismiss'=>"modal",
     'class' => 'btn btn-warning modalButton']) ?>
    </p>  

    <?php Pjax::begin();?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'tableOptions'=>[
            'class'=>'table table-striped table-bordered table-hover',
            'data'=>[
                'selector'=>'muestras'
            ]
        ],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nombre',
            'tipo',
            'horas',
            'General_id',

            [
                'class' => 'yii\grid\CheckboxColumn',
                'checkboxOptions'=>function($model, $key, $index, $column){
                    return ['value'=>Json::encode($model->attributes)];
                }
            ],
        ],
    ]); ?>
    <?php Pjax::end();?>
    
    <p><?= Html::button(Yii::t('app', 'Select'), ['class'=>'btn btn-primary buttonSelectMultiple'])   ?></p>
</div>
