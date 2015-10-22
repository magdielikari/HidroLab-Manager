<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\EquiposHasGeneral */

$this->title = Yii::t('models', 'Update {modelClass}: ', [
    'modelClass' => 'Equipos Has General',
]) . ' ' . $model->Equipos_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Equipos Has Generals'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Equipos_id, 'url' => ['view', 'Equipos_id' => $model->Equipos_id, 'General_id' => $model->General_id]];
$this->params['breadcrumbs'][] = Yii::t('models', 'Update');
?>
<div class="equipos-has-general-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
