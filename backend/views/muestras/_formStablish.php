<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Muestras */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="muestras-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipo')->dropDownList(['Puntual'=>'Puntual', 'Compuesta'=>'Compuesta'], ['prompt'=>'']) ?>

    <?= $form->field($model, 'horas')->textInput() ?>

    <?= $form->field($model, 'General_id')->textInput(['maxlength' => true, 'readOnly'=>true, 'data'=>[
    	'get'=>['general'=>'id']
    ]]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('models', 'Create') : Yii::t('models', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
