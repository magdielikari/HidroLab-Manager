<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Url;
use common\models\helpers\ModelUtility;
/* @var $this yii\web\View */
/* @var $searchModel common\models\search\DecretoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('models', 'Decretos');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="decreto-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::button(Yii::t('models', 'Create Decreto'), ['value'=>Url::to('create'),
        'class' => 'btn btn-success modalButton', 'data-title'=>'Create decreto']) ?>

    </p>

    <?php Pjax::begin();?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],


            [
                'attribute'=>'Departamento',
                'format'=>'raw',
                'value'=>function($data){
                    return ModelUtility::handler($data, 'departamentos', 'nombre');
                },
                'options'=>['class'=>'text-center'],
            ],
            'nombre',
            'gaceta',
            'fecha',
            [
                'attribute'=>'tipos',
                'format'=>'raw',
                'value'=>function($data){
                    return ModelUtility::handler($data, 'tipos', 'nombre');
                },
                'options'=>['class'=>'text-center'],
            ],


            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end();?>
</div>
<?php echo $this->renderFile('@backend/views/herramientas/modal.php'); ?>