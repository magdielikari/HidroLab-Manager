<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\search\ClientesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clientes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'direccion') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'encargado') ?>

    <?php // echo $form->field($model, 'nRif') ?>

    <?php // echo $form->field($model, 'cRif') ?>

    <?php // echo $form->field($model, 'siglas') ?>

    <?php // echo $form->field($model, 'contador') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('models', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('models', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
