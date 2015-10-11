<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Dialaborables */

$this->title = Yii::t('models', 'Update {modelClass}: ', [
    'modelClass' => 'Dialaborables',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Dialaborables'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('models', 'Update');
?>
<div class="dialaborables-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
