<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\bootstrap\Modal;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\CostopredeterminadosHasCostomuestraSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

//$this->title = Yii::t('models', 'Costopredeterminados Has Costomuestras');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="costopredeterminados-has-costomuestra-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
     <?= Html::button(Yii::t('models', 'Create CostoMuestraS'), ['data-dismiss'=>"modal",
     'class' => 'btn btn-warning modalButton']) ?>
    </p>   

    <?php Pjax::begin();?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'CostoPredeterminados_id',
            'CostoMuestra_id',
            'cantidad',

            ['class' => 'yii\grid\ActionColumn'],
        ],S
    ]); ?>
    <?php Pjax::end();?>
</div>
