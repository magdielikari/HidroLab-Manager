<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\CaracterizacionHasDepartamento */

$this->title = $model->Caracterizacion_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Caracterizacion Has Departamentos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="caracterizacion-has-departamento-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('models', 'Update'), ['update', 'Caracterizacion_id' => $model->Caracterizacion_id, 'Departamento_id' => $model->Departamento_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('models', 'Delete'), ['delete', 'Caracterizacion_id' => $model->Caracterizacion_id, 'Departamento_id' => $model->Departamento_id], [
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
            'Departamento_id',
        ],
    ]) ?>

</div>
