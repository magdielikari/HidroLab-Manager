<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\DecretoHasTipo */

$this->title = Yii::t('models', 'Update {modelClass}: ', [
    'modelClass' => 'Decreto Has Tipo',
]) . ' ' . $model->Decreto_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Decreto Has Tipos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Decreto_id, 'url' => ['view', 'Decreto_id' => $model->Decreto_id, 'Tipo_id' => $model->Tipo_id]];
$this->params['breadcrumbs'][] = Yii::t('models', 'Update');
?>
<div class="decreto-has-tipo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
