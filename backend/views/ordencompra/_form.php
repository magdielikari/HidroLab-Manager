<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Ordencompra */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ordencompra-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nOrden')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ubicacion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'observaciones')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'estado')->dropDownList([ 'Rechazado' => 'Rechazado', 'Pendiente' => 'Pendiente', 'Aceptada' => 'Aceptada', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'Peticion_id')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('models', 'Create') : Yii::t('models', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
