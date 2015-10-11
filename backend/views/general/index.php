<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\GeneralSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('models', 'Generals');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="general-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('models', 'Create General'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'Copias',
            'Caudal',
            'Analisis',
            'Departamento_id',
            // 'Decreto_id',
            // 'Clientes_id',
            // 'Vendedor_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
