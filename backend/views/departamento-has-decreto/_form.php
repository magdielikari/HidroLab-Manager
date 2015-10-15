<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Decreto;
use common\models\Departamento;

/* @var $this yii\web\View */
/* @var $model common\models\DepartamentoHasDecreto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="departamento-has-decreto-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Departamento_id')->dropDownList(
    	ArrayHelper::map(Departamento::find()->all(),'id','nombre'),
    	['prompt'=>'Select Departamento']
    )?>

    <?= $form->field($model, 'Decreto_id')->dropDownList(
    	ArrayHelper::map(Decreto::find()->all(),'id','nombre'),
    	['prompt'=>'Select Departamento']
    )?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('models', 'Create') : Yii::t('models', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
