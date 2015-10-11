<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Costos */

$this->title = Yii::t('models', 'Update {modelClass}: ', [
    'modelClass' => 'Costos',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Costos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'General_id' => $model->General_id, 'CostoParametro_id' => $model->CostoParametro_id, 'CostoParametro_Parametros_id' => $model->CostoParametro_Parametros_id, 'costoMuestra_id' => $model->costoMuestra_id]];
$this->params['breadcrumbs'][] = Yii::t('models', 'Update');
?>
<div class="costos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
