<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Ordencompra */

$this->title = Yii::t('models', 'Update {modelClass}: ', [
    'modelClass' => 'Ordencompra',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Ordencompras'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('models', 'Update');
?>
<div class="ordencompra-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
