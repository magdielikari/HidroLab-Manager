<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\GeneralHasTipo */

$this->title = $model->General_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'General Has Tipos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="general-has-tipo-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('models', 'Update'), ['update', 'General_id' => $model->General_id, 'Tipo_id' => $model->Tipo_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('models', 'Delete'), ['delete', 'General_id' => $model->General_id, 'Tipo_id' => $model->Tipo_id], [
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
            'General_id',
            'Tipo_id',
        ],
    ]) ?>

</div>
