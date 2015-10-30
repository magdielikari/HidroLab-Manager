<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\widgets\Pjax;    

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\CareaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('models', 'Careas');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carea-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
    <?= Html::button(Yii::t('models', 'Crear Carea'), ['value'=>Url::to(['carea/create']),
    'class' => 'btn btn-success modalButton', 'data-title'=>'Crear Carea']) ?>   
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nombre',
            'Celular_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

<?php echo $this->renderFile('@backend/views/herramientas/modal.php'); ?>