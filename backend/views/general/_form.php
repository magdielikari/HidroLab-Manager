<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

use common\models\Clientes;
use common\models\Vendedor;
use common\models\Decreto;
use common\models\Departamento;

/* @var $this yii\web\View */
/* @var $model common\models\General */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="general-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'copias')->textInput() ?>

    <?= $form->field($model, 'caudal')->dropDownList([ 'Aplica' => 'Aplica', 'No Aplica' => 'No Aplica', ], ['prompt' => Yii::t('models', 'Select Caudal')]) ?>

    <?= $form->field($model, 'analisis')->dropDownList([ 'Analisis y Muestreo' => 'Analisis y Muestreo', 'Analisis' => 'Analisis', ], ['prompt' => Yii::t('models', 'Select Analisis')]) ?>

    <?= $form->field($model, 'Departamento_id')->dropdownList(ArrayHelper::map(Departamento::find()->asArray()->all(), 'id', 'nombre'), ['prompt'=>Yii::t('models', 'Select Departamento')]) ?>

    <?= $form->field($model, 'Decreto_id')->dropdownList(ArrayHelper::map(Decreto::find()->asArray()->all(), 'id', 'nombre'), ['prompt'=>Yii::t('models', 'Select Decreto')]) ?>

    <?= $form->field($model, 'Clientes_id')->dropDownList(ArrayHelper::map(Clientes::find()->asArray()->all(), 'id', 'nombre'), ['prompt'=>Yii::t('models', 'Select Clientes')]) ?>

    <?= $form->field($model, 'Vendedor_id')->dropdownList(ArrayHelper::map(Vendedor::find()->asArray()->all(), 'id', 'nombre'), ['prompt'=>Yii::t('models', 'Select Vendedor')]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('models', 'Create') : Yii::t('models', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
