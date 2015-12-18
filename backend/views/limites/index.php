<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Url;

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
        <?= Html::button(Yii::t('models', 'Create Limites'), ['value'=>Url::to('create'),
        'class' => 'btn btn-success modalButton', 'data-title'=>'Create limites']) ?>
    </p>

    <?php Pjax::begin();?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'liminf',
            'limsup',
            [
                'attribute'=>'departamento_id',
                'value'=>'departamento.nombre',
            ],
            [
                'attribute'=>'decreto_id',
                'value'=>'decreto.nombre',
            ],
            [
                'attribute'=>'tipo_id',
                'value'=>'tipo.nombre',
            ],
            [
                'attribute'=>'subTipo_id',
                'value'=>'subTipo.nombre'
            ],
            [
                'attribute'=>'caracterizacion_id',
                'value'=>'caracterizacion.nombre'
            ],
            [
                'attribute'=>'rama_id',
                'value'=>'rama.nombre'
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end();?>
</div>
<?php echo $this->renderFile('@backend/views/herramientas/modal.php'); ?>

