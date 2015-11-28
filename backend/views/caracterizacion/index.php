<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\CaracterizacionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('models', 'Caracterizacions');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="caracterizacion-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('models', 'Create Caracterizacion'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nombre',
            'preservacion',
            'siglas',
            'laboratorio',
            // 'opacidad',
            // 'metodo',
            // 'tipo',
            // 'Equipos_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
