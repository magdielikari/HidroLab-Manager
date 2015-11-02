<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\GeneralHasSubtipo */

$this->title = Yii::t('models', 'Update {modelClass}: ', [
    'modelClass' => 'General Has Subtipo',
]) . ' ' . $model->General_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'General Has Subtipos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->General_id, 'url' => ['view', 'General_id' => $model->General_id, 'SubTipo_id' => $model->SubTipo_id]];
$this->params['breadcrumbs'][] = Yii::t('models', 'Update');
?>
<div class="general-has-subtipo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
