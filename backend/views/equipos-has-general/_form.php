<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\EquiposHasGeneral */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="equipos-has-general-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Equipos_id')->textInput() ?>

    <?= $form->field($model, 'General_id')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('models', 'Create') : Yii::t('models', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
