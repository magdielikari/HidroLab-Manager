<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\search\ParametrosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="plantilla-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'reporte') ?>

    <?= $form->field($model, 'Vendedor_id') ?>

    <?= $form->field($model, 'Departamento_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('models', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('models', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
