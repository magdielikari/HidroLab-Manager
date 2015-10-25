<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\CostopredeterminadosHasCostoparametro */

//$this->title = Yii::t('models', 'Create Costopredeterminados Has Costoparametro');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Costopredeterminados Has Costoparametros'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
	
	<p>
     <?= Html::button(Yii::t('models', 'Seleccionar CostoParametros'), ['data-dismiss'=>"modal",
     'class' => 'btn btn-warning modalButton']) ?>
    </p>  

<div class="costopredeterminados-has-costoparametro-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
