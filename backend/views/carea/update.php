<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Carea */

$this->title = Yii::t('models', 'Update {modelClass}: ', [
    'modelClass' => 'Carea',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Careas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'Celular_id' => $model->Celular_id]];
$this->params['breadcrumbs'][] = Yii::t('models', 'Update');
?>
<div class="carea-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
