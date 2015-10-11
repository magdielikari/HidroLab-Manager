<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\ClientesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('models', 'Clientes');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clientes-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('models', 'Create Clientes'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'Nombre',
            'Direccion:ntext',
            'Email:email',
            'Encargado',
            // 'NRif',
            // 'CRif',
            // 'Siglas',
            // 'Contador',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
