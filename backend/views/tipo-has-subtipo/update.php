<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TipoHasSubtipo */

$this->title = Yii::t('models', 'Update {modelClass}: ', [
    'modelClass' => 'Tipo Has Subtipo',
]) . ' ' . $model->Tipo_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Tipo Has Subtipos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Tipo_id, 'url' => ['view', 'Tipo_id' => $model->Tipo_id, 'SubTipo_id' => $model->SubTipo_id]];
$this->params['breadcrumbs'][] = Yii::t('models', 'Update');
?>
<div class="tipo-has-subtipo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
