<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\GeneralSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

//$this->title = Yii::t('models', 'Generals');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="general-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
     <?= Html::button(Yii::t('models', 'Create General'), ['data-dismiss'=>"modal",
     'class' => 'btn btn-warning modalButton']) ?>
    </p>  

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'tableOptions'=> [
            'class'=>'table table-striped table-bordered table-hover'
        ],
        'rowOptions'=>function($model, $key, $index, $grid){
            return [
                'class'=>'gridRow',
                'data-url'=>Url::to(['ajax-view', 'id'=>$model->id])
            ];
        },
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'copias',
            'caudal',
            'analisis',
            'departamento.nombre',
            'decreto.nombre',
            'clientes.nombre',
            'vendedor.user.username',

        ],
    ]); ?>

</div>
