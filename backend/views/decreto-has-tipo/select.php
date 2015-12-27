<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Url;
use yii\helpers\Json;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\GeneralHasTipoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
?>
<div class="decreto-has-tipo-index">

    <p>
     <?= Html::button(Yii::t('models', 'Create Rama-has-General'), ['data-dismiss'=>"modal",
     'class' => 'btn btn-warning modalButton']) ?>
    </p>  

    <?php Pjax::begin();?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'tableOptions'=> [
            'class'=>'table table-striped table-bordered table-hover',
            'data'=>[
                'selector'=>'tipos'
            ]
        ],
        'columns' => [
            'decreto.nombre',
            'tipo.nombre',
            [
                'class'=>'yii\grid\CheckboxColumn',
                'checkboxOptions'=>function($model, $key, $index, $column){
                    return ['value'=>Json::encode($model->relatedRecords['tipo'])];
                }
            ]
        ],
    ]); ?>
    <?php Pjax::end();?>

    <p><?= Html::button(Yii::t('app', 'Select'), ['class'=>'btn btn-primary buttonSelectMultiple'])   ?></p>
</div>
