<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Costos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="costos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cAnalisis')->textInput() ?>

    <?= $form->field($model, 'cMuestreo')->textInput() ?>

    <?= $form->field($model, 'cInforme')->textInput() ?>

    <?= $form->field($model, 'cAdministrativo')->textInput() ?>

    <?= $form->field($model, 'utilidad')->textInput() ?>

    <?= $form->field($model, 'rendimiento')->textInput() ?>

    <?= $form->field($model, 'General_id')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('models', 'Create') : Yii::t('models', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
