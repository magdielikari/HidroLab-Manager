<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\RamaHasCaracterizacionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('models', 'Rama Has Caracterizacions');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rama-has-caracterizacion-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::button(Yii::t('models', 'Create Rama Has Caracterizacion'), ['value'=>Url::to('create'),
        'class' => 'btn btn-success modalButton', 'data-title'=>'Crear Rama Has Caracterizacion']) ?>
    </p>
    <?php Pjax::begin();?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Rama_id',
            'Caracterizacion_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end();?>
</div>
<?php echo $this->renderFile('@backend/views/herramientas/modal.php'); ?>