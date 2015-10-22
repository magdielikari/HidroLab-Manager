<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\CaracterizacionHasEquipos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="caracterizacion-has-equipos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Caracterizacion_id')->textInput() ?>

    <?= $form->field($model, 'Equipos_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('models', 'Create') : Yii::t('models', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
