<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Tipo;
use common\models\Decreto;

/* @var $this yii\web\View */
/* @var $model common\models\DecretoHasTipo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="decreto-has-tipo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Decreto_id')->dropDownList(
    	ArrayHelper::map(Decreto::find()->all(),'id','nombre'),
    	['prompt'=>'Select Decreto']
    )?>

    <?= $form->field($model, 'Tipo_id')->dropDownList(
    	ArrayHelper::map(Tipo::find()->all(),'id','nombre'),
    	['prompt'=>'Select Tipo']
    )?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('models', 'Create') : Yii::t('models', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
