<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\Tipo;
use common\models\Subtipo;
use yii\widgets\Pjax;
use yii\helpers\Url;
use yii\helpers\Json;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\TipoHasSubtipoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

?>
<div class="tipo-has-subtipo-index">
    <p>
        <?= Html::button(Yii::t('models', 'Create Tipo Has Subtipo'), ['value'=>Url::to('create'),
        'class' => 'btn btn-success modalButton','data-title'=>'Seleccionar Muestra']) ?>
    </p>

    <?php Pjax::begin();?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'tableOptions'=> [
            'class'=>'table table-striped table-bordered table-hover',
            'data'=>[
                'selector'=>'subTipos'
            ]
        ],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tipo.nombre',
            'subTipo.nombre',

            [
                'class'=>'yii\grid\CheckboxColumn',
                'checkboxOptions'=>function($model, $key, $index, $column){
                    return ['value'=>Json::encode($model->relatedRecords['subTipo'])];
                }
            ]
        ],
    ]); ?>
    <?php Pjax::end();?>

    <p><?= Html::button(Yii::t('app', 'Select'), ['class'=>'btn btn-primary buttonSelectMultiple'])   ?></p>
</div>
<?php echo $this->renderFile('@backend/views/herramientas/modal.php'); ?>