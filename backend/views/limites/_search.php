<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\search\LimitesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="limites-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'liminf') ?>

    <?= $form->field($model, 'Limsup') ?>

    <?= $form->field($model, 'Existente') ?>

    <?= $form->field($model, 'Departamento_id') ?>

    <?php // echo $form->field($model, 'Decreto_id') ?>

    <?php // echo $form->field($model, 'Tipo_id') ?>

    <?php // echo $form->field($model, 'SubTipo_id') ?>

    <?php // echo $form->field($model, 'Caracterizacion_id') ?>

    <?php // echo $form->field($model, 'Rama_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('models', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('models', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
