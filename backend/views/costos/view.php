<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Costos */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Costos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="costos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('models', 'Update'), ['update', 'id' => $model->id, 'General_id' => $model->General_id, 'CostoParametro_id' => $model->CostoParametro_id, 'CostoParametro_Parametros_id' => $model->CostoParametro_Parametros_id, 'CostoMuestra_id' => $model->CostoMuestra_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('models', 'Delete'), ['delete', 'id' => $model->id, 'General_id' => $model->General_id, 'CostoParametro_id' => $model->CostoParametro_id, 'CostoParametro_Parametros_id' => $model->CostoParametro_Parametros_id, 'CostoMuestra_id' => $model->CostoMuestra_id], [
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
            'cAnalisis',
            'cMuestreo',
            'cInforme',
            'cAdministrativo',
            'utilidad',
            'rendimiento',
            'General_id',
            'CostoParametro_id',
            'CostoParametro_Parametros_id',
            'CostoMuestra_id',
        ],
    ]) ?>

</div>
