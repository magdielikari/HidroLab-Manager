<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\CaracterizacionHasDepartamento */

$this->title = Yii::t('models', 'Update {modelClass}: ', [
    'modelClass' => 'Caracterizacion Has Departamento',
]) . ' ' . $model->Caracterizacion_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Caracterizacion Has Departamentos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Caracterizacion_id, 'url' => ['view', 'Caracterizacion_id' => $model->Caracterizacion_id, 'Departamento_id' => $model->Departamento_id]];
$this->params['breadcrumbs'][] = Yii::t('models', 'Update');
?>
<div class="caracterizacion-has-departamento-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
