<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Peticion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="peticion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fPeticion')->textInput() ?>

    <?= $form->field($model, 'cadena')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fVencimiento')->textInput() ?>

    <?= $form->field($model, 'fCreacion')->textInput() ?>

    <?= $form->field($model, 'Referencia_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'General_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Muestras_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Costos_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Reporte_id')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('models', 'Create') : Yii::t('models', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
