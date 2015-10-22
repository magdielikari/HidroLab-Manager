<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\CostopredeterminadosHasCostomuestra */

$this->title = Yii::t('models', 'Update {modelClass}: ', [
    'modelClass' => 'Costopredeterminados Has Costomuestra',
]) . ' ' . $model->CostoPredeterminados_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Costopredeterminados Has Costomuestras'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->CostoPredeterminados_id, 'url' => ['view', 'CostoPredeterminados_id' => $model->CostoPredeterminados_id, 'CostoMuestra_id' => $model->CostoMuestra_id]];
$this->params['breadcrumbs'][] = Yii::t('models', 'Update');
?>
<div class="costopredeterminados-has-costomuestra-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
