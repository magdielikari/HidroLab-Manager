<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\LimitesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('models', 'Limites');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="limites-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('models', 'Create Limites'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'liminf',
            'Limsup',
            'Existente',
            'Departamento_id',
            // 'Decreto_id',
            // 'Tipo_id',
            // 'SubTipo_id',
            // 'Caracterizacion_id',
            // 'Rama_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
