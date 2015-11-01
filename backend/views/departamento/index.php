<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Url;
use common\models\Departamento;
use common\models\helpers\ModelUtility;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\DepartamentoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('models', 'Departamentos');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="departamento-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::button(Yii::t('models', 'Create Departamento'), ['value'=>Url::to('departamento/create'),
        'class' => 'btn btn-success modalButton','data-title'=>'Seleccionar Muestra']) ?>
    </p>
    
    <?php Pjax::begin();?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nombre',
            'contador',
            [
                'attribute'=>'decretos',
                'value'=>function($data){
                    return ModelUtility::handler($data, 'decretos', 'nombre');
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end();?>
</div>
<?php echo $this->renderFile('@backend/views/herramientas/modal.php'); ?>