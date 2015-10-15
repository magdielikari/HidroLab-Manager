<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\DepartamentoHasDecreto */

$this->title = $model->Departamento_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Departamento Has Decretos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="departamento-has-decreto-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('models', 'Update'), ['update', 'Departamento_id' => $model->Departamento_id, 'Decreto_id' => $model->Decreto_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('models', 'Delete'), ['delete', 'Departamento_id' => $model->Departamento_id, 'Decreto_id' => $model->Decreto_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('models', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Departamento_id',
            'Decreto_id',
        ],
    ]) ?>

</div>
