<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Tipo;
use common\models\Subtipo;


/* @var $this yii\web\View */
/* @var $model common\models\TipoHasSubtipo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tipo-has-subtipo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Tipo_id')->dropDownList(
    	ArrayHelper::map(Tipo::find()->all(),'id','nombre'),
    	['prompt'=>'Select Tipos']
    )?>

	<?= $form->field($model, 'SubTipo_id')->dropDownList(
    	ArrayHelper::map(SubTipo::find()->all(),'id','nombre'),
    	['prompt'=>'Select SubTipos']
    )?>
	
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('models', 'Create') : Yii::t('models', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
