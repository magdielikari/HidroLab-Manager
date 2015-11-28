<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Administrativos */

$this->title = Yii::t('models', 'Update {modelClass}: ', [
    'modelClass' => 'Administrativos',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Administrativos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('models', 'Update');
?>
<div class="administrativos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
