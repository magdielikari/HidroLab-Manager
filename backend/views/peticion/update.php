<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Peticion */

$this->title = Yii::t('models', 'Update {modelClass}: ', [
    'modelClass' => 'Peticion',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Peticions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'costos_id' => $model->costos_id, 'costos_General_id' => $model->costos_General_id, 'costos_CostoParametro_id' => $model->costos_CostoParametro_id, 'costos_CostoParametro_Parametros_id' => $model->costos_CostoParametro_Parametros_id, 'costos_costoMuestra_id' => $model->costos_costoMuestra_id, 'General_id' => $model->General_id, 'Muestras_id' => $model->Muestras_id]];
$this->params['breadcrumbs'][] = Yii::t('models', 'Update');
?>
<div class="peticion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
