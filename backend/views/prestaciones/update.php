<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Prestaciones */

$this->title = Yii::t('models', 'Update {modelClass}: ', [
    'modelClass' => 'Prestaciones',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Prestaciones'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('models', 'Update');
?>
<div class="prestaciones-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
