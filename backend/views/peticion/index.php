<?php

use yii\helpers\Html;
use yii\grid\GridView;

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
        <?= Html::a(Yii::t('models', 'Create Peticion'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

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
            // 'referencia_id',
            // 'costos_id',
            // 'costos_General_id',
            // 'costos_CostoParametro_id',
            // 'costos_CostoParametro_Parametros_id',
            // 'costos_costoMuestra_id',
            // 'General_id',
            // 'Muestras_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
