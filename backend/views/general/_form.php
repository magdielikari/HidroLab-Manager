<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Departamento;
use common\models\Decreto;
use common\models\Clientes;

/* @var $this yii\web\View */
/* @var $model common\models\General */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="general-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'copias')->textInput() ?>

    <?= $form->field($model, 'caudal')->dropDownList([ 'Aplica' => 'Aplica', 'No Aplica' => 'No Aplica', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'analisis')->dropDownList([ 'Analisis y Muestreo' => 'Analisis y Muestreo', 'Analisis' => 'Analisis', ], ['prompt' => '']) ?>

    <?= $form->field($model,'Departamento_id')->dropDownList(
        ArrayHelper::map(Departamento::find()->select(['nombre','id'])->all(),'id','nombre'),
        ['class'=>'form-control inline-block','prompt'=>'Select Departamento']
        )?>

    <?= $form->field($model,'Decreto_id')->dropDownList(
        ArrayHelper::map(Decreto::find()->select(['nombre','id'])->all(),'id','nombre'),
        ['class'=>'form-control inline-block','prompt'=>'Select Decreto']
        )?>

    <?= $form->field($model,'Clientes_id')->dropDownList(
        ArrayHelper::map(Clientes::find()->select(['nombre','id'])->all(),'id','nombre'),
        ['class'=>'form-control inline-block','prompt'=>'Select Cliente']
        )?>

    <?= $form->field($model, 'Vendedor_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('models', 'Create') : Yii::t('models', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
