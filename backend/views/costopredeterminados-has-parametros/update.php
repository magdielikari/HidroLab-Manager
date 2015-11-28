<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\CostopredeterminadosHasParametros */

$this->title = Yii::t('models', 'Update {modelClass}: ', [
    'modelClass' => 'Costopredeterminados Has Parametros',
]) . ' ' . $model->CostoPredeterminados_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Costopredeterminados Has Parametros'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->CostoPredeterminados_id, 'url' => ['view', 'CostoPredeterminados_id' => $model->CostoPredeterminados_id, 'Parametros_id' => $model->Parametros_id]];
$this->params['breadcrumbs'][] = Yii::t('models', 'Update');
?>
<div class="costopredeterminados-has-parametros-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
