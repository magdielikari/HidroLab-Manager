<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Caracterizacion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="caracterizacion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Preservacion')->dropDownList([ '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'Siglas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Laboratorio')->dropDownList([ 'Si' => 'Si', 'No' => 'No', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'Opacidad')->dropDownList([ 'Si' => 'Si', 'No' => 'No', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'Metodo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Tipo')->dropDownList([ 'AceitesG' => 'AceitesG', 'Cianuro' => 'Cianuro', 'Cloruros' => 'Cloruros', 'Dbo' => 'Dbo', 'Detergente' => 'Detergente', 'Dqo' => 'Dqo', 'Fenol' => 'Fenol', 'Formaldehido' => 'Formaldehido', 'FosforoAA' => 'FosforoAA', 'FosforoAV' => 'FosforoAV', 'Nitratos' => 'Nitratos', 'Nitrito' => 'Nitrito', 'Nitrogeno' => 'Nitrogeno', 'NitrogenoA' => 'NitrogenoA', 'Solidos' => 'Solidos', 'Sulfatos' => 'Sulfatos', 'Sulfitos' => 'Sulfitos', 'Sulfuro' => 'Sulfuro', 'Fluoruro' => 'Fluoruro', 'NitrogenoT' => 'NitrogenoT', 'Ph' => 'Ph', 'SolidosD' => 'SolidosD', 'Conductividad' => 'Conductividad', 'Salinidad' => 'Salinidad', 'Color' => 'Color', 'Espuma' => 'Espuma', 'Turbidez' => 'Turbidez', 'Acidez' => 'Acidez', 'DurezaT' => 'DurezaT', 'Calcica' => 'Calcica', 'Magnesica' => 'Magnesica', 'Alcalinidad' => 'Alcalinidad', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'Equipos_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('models', 'Create') : Yii::t('models', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
