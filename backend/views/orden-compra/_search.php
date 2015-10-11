<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\search\OrdenCompraSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="orden-compra-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nOrden') ?>

    <?= $form->field($model, 'ubicacion') ?>

    <?= $form->field($model, 'observaciones') ?>

    <?= $form->field($model, 'estado') ?>

    <?php // echo $form->field($model, 'peticion_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('models', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('models', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
