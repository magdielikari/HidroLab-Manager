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



    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'copias',
            'caudal',
            'analisis',
            'Departamento_id',
            // 'Decreto_id',
            // 'Clientes_id',
            // 'Vendedor_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
