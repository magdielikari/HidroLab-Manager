<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\RamaHasCaracterizacion */

$this->title = Yii::t('models', 'Update {modelClass}: ', [
    'modelClass' => 'Rama Has Caracterizacion',
]) . ' ' . $model->Rama_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Rama Has Caracterizacions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Rama_id, 'url' => ['view', 'Rama_id' => $model->Rama_id, 'Caracterizacion_id' => $model->Caracterizacion_id]];
$this->params['breadcrumbs'][] = Yii::t('models', 'Update');
?>
<div class="rama-has-caracterizacion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
