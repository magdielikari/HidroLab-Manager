<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ParametrosHasMuestrasHasCostopredeterminados */

$this->title = Yii::t('models', 'Update {modelClass}: ', [
    'modelClass' => 'Parametros Has Muestras Has Costopredeterminados',
]) . ' ' . $model->Parametros_has_Muestras_Parametros_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Parametros Has Muestras Has Costopredeterminados'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Parametros_has_Muestras_Parametros_id, 'url' => ['view', 'Parametros_has_Muestras_Parametros_id' => $model->Parametros_has_Muestras_Parametros_id, 'Parametros_has_Muestras_Muestras_id' => $model->Parametros_has_Muestras_Muestras_id, 'CostoPredeterminados_id' => $model->CostoPredeterminados_id]];
$this->params['breadcrumbs'][] = Yii::t('models', 'Update');
?>
<div class="parametros-has-muestras-has-costopredeterminados-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
