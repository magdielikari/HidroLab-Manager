<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\PeticionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('models', 'Peticions');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peticion-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
<p>
    <?= Html::a(Yii::t('models','Create Peticion'),['generate'],['class'=>'btn btn-success'])?>
</p>

    <?php Pjax::begin();?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'fPeticion',
            'cadena',
            'fVencimiento',
            'fCreacion',
            // 'Referencia_id',
            // 'Costos_id',
            // 'Costos_General_id',
            // 'Costos_CostoParametro_id',
            // 'Costos_CostoParametro_Parametros_id',
            // 'Costos_CostoMuestra_id',
            // 'General_id',
            // 'Muestras_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end();?>
</div>
