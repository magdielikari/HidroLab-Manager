<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\Tipo;
use common\models\Subtipo;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\TipoHasSubtipoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('models', 'Tipo Has Subtipos');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-has-subtipo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('models', 'Create Tipo Has Subtipo'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tipo.nombre',
            'subTipo.nombre',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
