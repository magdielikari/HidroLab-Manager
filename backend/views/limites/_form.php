<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Limites */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="limites-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'liminf')->textInput() ?>

    <?= $form->field($model, 'limsup')->textInput() ?>

    <?= $form->field($model, 'existente')->dropDownList([ 'Si' => 'Si', 'No' => 'No', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'Departamento_id')->textInput() ?>

    <?= $form->field($model, 'Decreto_id')->textInput() ?>

    <?= $form->field($model, 'Tipo_id')->textInput() ?>

    <?= $form->field($model, 'SubTipo_id')->textInput() ?>

    <?= $form->field($model, 'Caracterizacion_id')->textInput() ?>

    <?= $form->field($model, 'Rama_id')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('models', 'Create') : Yii::t('models', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
