<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\search\CaracterizacionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="caracterizacion-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'Preservacion') ?>

    <?= $form->field($model, 'Siglas') ?>

    <?= $form->field($model, 'Laboratorio') ?>

    <?php // echo $form->field($model, 'Opacidad') ?>

    <?php // echo $form->field($model, 'Metodo') ?>

    <?php // echo $form->field($model, 'Tipo') ?>

    <?php // echo $form->field($model, 'Equipos_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app\messages\es-MX\models.php', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app\messages\es-MX\models.php', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
