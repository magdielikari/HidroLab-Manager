<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\CaracterizacionHasEquipos */

$this->title = Yii::t('models', 'Update {modelClass}: ', [
    'modelClass' => 'Caracterizacion Has Equipos',
]) . ' ' . $model->Caracterizacion_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Caracterizacion Has Equipos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Caracterizacion_id, 'url' => ['view', 'Caracterizacion_id' => $model->Caracterizacion_id, 'Equipos_id' => $model->Equipos_id]];
$this->params['breadcrumbs'][] = Yii::t('models', 'Update');
?>
<div class="caracterizacion-has-equipos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
