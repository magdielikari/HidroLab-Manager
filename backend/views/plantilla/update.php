<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Plantilla */

$this->title = Yii::t('models', 'Update {modelClass}: ', [
    'modelClass' => 'Plantilla',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Plantillas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('models', 'Update');
?>
<div class="plantilla-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
