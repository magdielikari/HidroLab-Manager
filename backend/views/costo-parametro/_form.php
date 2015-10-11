<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\CostoParametro */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="costo-parametro-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tMateriales')->textInput() ?>

    <?= $form->field($model, 'tEquipos')->textInput() ?>

    <?= $form->field($model, 'tMano')->textInput() ?>

    <?= $form->field($model, 'Parametros_id')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('models', 'Create') : Yii::t('models', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
