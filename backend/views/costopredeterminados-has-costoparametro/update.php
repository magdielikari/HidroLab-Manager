<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\CostopredeterminadosHasCostoparametro */

$this->title = Yii::t('models', 'Update {modelClass}: ', [
    'modelClass' => 'Costopredeterminados Has Costoparametro',
]) . ' ' . $model->CostoPredeterminados_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Costopredeterminados Has Costoparametros'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->CostoPredeterminados_id, 'url' => ['view', 'CostoPredeterminados_id' => $model->CostoPredeterminados_id, 'CostoParametro_id' => $model->CostoParametro_id]];
$this->params['breadcrumbs'][] = Yii::t('models', 'Update');
?>
<div class="costopredeterminados-has-costoparametro-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
