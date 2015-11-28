<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\search\GeneralSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="general-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'copias') ?>

    <?= $form->field($model, 'caudal') ?>

    <?= $form->field($model, 'analisis') ?>

    <?= $form->field($model, 'Departamento_id') ?>

    <?php // echo $form->field($model, 'Decreto_id') ?>

    <?php // echo $form->field($model, 'Clientes_id') ?>

    <?php // echo $form->field($model, 'Vendedor_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('models', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('models', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
