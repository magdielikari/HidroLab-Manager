<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\DepartamentoHasDecreto */

$this->title = Yii::t('models', 'Update {modelClass}: ', [
    'modelClass' => 'Departamento Has Decreto',
]) . ' ' . $model->Departamento_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Departamento Has Decretos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Departamento_id, 'url' => ['view', 'Departamento_id' => $model->Departamento_id, 'Decreto_id' => $model->Decreto_id]];
$this->params['breadcrumbs'][] = Yii::t('models', 'Update');
?>
<div class="departamento-has-decreto-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
