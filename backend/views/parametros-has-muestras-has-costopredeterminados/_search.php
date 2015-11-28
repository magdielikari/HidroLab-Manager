<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\search\ParametrosHasMuestrasHasCostopredeterminadosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="parametros-has-muestras-has-costopredeterminados-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Parametros_has_Muestras_Parametros_id') ?>

    <?= $form->field($model, 'Parametros_has_Muestras_Muestras_id') ?>

    <?= $form->field($model, 'CostoPredeterminados_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('models', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('models', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
