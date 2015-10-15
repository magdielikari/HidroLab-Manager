<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\DecretoHasTipo */

$this->title = $model->Decreto_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Decreto Has Tipos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="decreto-has-tipo-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('models', 'Update'), ['update', 'Decreto_id' => $model->Decreto_id, 'Tipo_id' => $model->Tipo_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('models', 'Delete'), ['delete', 'Decreto_id' => $model->Decreto_id, 'Tipo_id' => $model->Tipo_id], [
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
            'Decreto_id',
            'Tipo_id',
        ],
    ]) ?>

</div>
