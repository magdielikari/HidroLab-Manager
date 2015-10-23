<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

use common\models\Puesto;
use common\models\User;
use common\models\Departamento;

/* @var $this yii\web\View */
/* @var $model common\models\Vendedor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vendedor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Puesto_id')->dropdownList(ArrayHelper::map(Puesto::find()->asArray()->all(), 'id', 'nombre'), ['prompt'=>Yii::t('models', 'Select Puesto')]) ?>

    <?= $form->field($model, 'user_id')->dropdownList(ArrayHelper::map(User::find()->asArray()->all(), 'id', 'username'), ['prompt'=>Yii::t('models', 'Select User')]) ?>

    <?= $form->field($model, 'Departamento_id')->dropdownList(ArrayHelper::map(Departamento::find()->asArray()->all(), 'id', 'nombre'), ['prompt'=>Yii::t('models', 'Select Departamento')]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('models', 'Create') : Yii::t('models', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
