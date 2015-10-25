<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\bootstrap\Modal;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\CostopredeterminadosHasCostoparametroSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

//$this->title = Yii::t('models', 'Costopredeterminados Has Costoparametros');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="costopredeterminados-has-costoparametro-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
     <?= Html::button(Yii::t('models', 'Create CostoParametros'), ['data-dismiss'=>"modal",
     'class' => 'btn btn-warning modalButton']) ?>
    </p>  
    
    <?php Pjax::begin();?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'CostoPredeterminados_id',
            'CostoParametro_id',
            'cantidad',
            'k',
            'unidad',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end();?>
</div>
