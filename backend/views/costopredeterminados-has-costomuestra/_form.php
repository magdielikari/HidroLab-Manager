<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\CostopredeterminadosHasCostomuestra */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="costopredeterminados-has-costomuestra-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'CostoPredeterminados_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CostoMuestra_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cantidad')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('models', 'Create') : Yii::t('models', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
