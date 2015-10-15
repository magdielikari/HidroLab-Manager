<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Limites */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Limites'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="limites-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('models', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('models', 'Delete'), ['delete', 'id' => $model->id], [
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
            'id',
            'liminf',
            'limsup',
            'existente',
            'Departamento_id',
            'Decreto_id',
            'Tipo_id',
            'SubTipo_id',
            'Caracterizacion_id',
            'Rama_id',
        ],
    ]) ?>

</div>
