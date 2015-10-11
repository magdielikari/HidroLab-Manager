<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Decreto */

$this->title = Yii::t('models', 'Update {modelClass}: ', [
    'modelClass' => 'Decreto',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Decretos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('models', 'Update');
?>
<div class="decreto-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
