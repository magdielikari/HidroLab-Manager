<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\CaracterizacionHasEquipos */

$this->title = $model->Caracterizacion_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Caracterizacion Has Equipos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="caracterizacion-has-equipos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('models', 'Update'), ['update', 'Caracterizacion_id' => $model->Caracterizacion_id, 'Equipos_id' => $model->Equipos_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('models', 'Delete'), ['delete', 'Caracterizacion_id' => $model->Caracterizacion_id, 'Equipos_id' => $model->Equipos_id], [
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
            'Caracterizacion_id',
            'Equipos_id',
        ],
    ]) ?>

</div>
