<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\General */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="general-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'copias')->textInput() ?>

    <?= $form->field($model, 'caudal')->dropDownList([ 'Aplica' => 'Aplica', 'No Aplica' => 'No Aplica', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'analisis')->dropDownList([ 'Analisis y Muestreo' => 'Analisis y Muestreo', 'Analisis' => 'Analisis', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'Departamento_id')->textInput() ?>

    <?= $form->field($model, 'Decreto_id')->textInput() ?>

    <?= $form->field($model, 'Clientes_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Vendedor_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('models', 'Create') : Yii::t('models', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
