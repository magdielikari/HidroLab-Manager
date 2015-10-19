<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use common\models\Decreto;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\DepartamentoHasDecretoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('models', 'Departamento Has Decretos');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="departamento-has-decreto-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('models', 'Create Departamento Has Decreto'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'departamento.nombre',
            'decreto.nombre',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
