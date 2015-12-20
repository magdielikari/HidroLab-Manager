<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Departamento;
use common\models\Decreto;
use common\models\Tipo;
use common\models\SubTipo;
use common\models\Rama;
use common\models\Caracterizacion;

/* @var $this yii\web\View */
/* @var $model common\models\Limites */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="limites-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'liminf')->textInput() ?>

    <?= $form->field($model, 'limsup')->textInput() ?>

    <?= $form->field($model, 'existente')->dropDownList([ 'Si' => 'Si', 'No' => 'No', ], ['prompt' => 'Selecione una opcion']) ?>

    <?= $form->field($model,'Departamento_id')->dropDownList(
        ArrayHelper::map(Departamento::find()->select(['nombre','id'])->all(),'id','nombre'),
        ['class'=>'form-control inline-block','prompt'=>'Select Departamento']
        )?>

    <?= $form->field($model,'Decreto_id')->dropDownList(
        ArrayHelper::map(Decreto::find()->select(['nombre','id'])->all(),'id','nombre'),
        ['class'=>'form-control inline-block','prompt'=>'Select Decreto']
        )?>

    <?= $form->field($model,'Tipo_id')->dropDownList(
        ArrayHelper::map(Tipo::find()->select(['nombre','id'])->all(),'id','nombre'),
        ['class'=>'form-control inline-block','prompt'=>'Select Tipo']
        )?>

    <?= $form->field($model,'SubTipo_id')->dropDownList(
        ArrayHelper::map(SubTipo::find()->select(['nombre','id'])->all(),'id','nombre'),
        ['class'=>'form-control inline-block','prompt'=>'Select SubTipo']
        )?>

    <?= $form->field($model,'Caracterizacion_id')->dropDownList(
        ArrayHelper::map(Caracterizacion::find()->select(['nombre','id'])->all(),'id','nombre'),
        ['class'=>'form-control inline-block','prompt'=>'Select Caracterizacion']
        )?>

    <?= $form->field($model,'Rama_id')->dropDownList(
        ArrayHelper::map(Rama::find()->select(['nombre','id'])->all(),'id','nombre'),
        ['class'=>'form-control inline-block','prompt'=>'Select Rama']
        )?>        

     <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('models', 'Create') : Yii::t('models', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
