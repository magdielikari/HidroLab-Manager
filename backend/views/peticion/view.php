<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Peticion */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Peticions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peticion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('models', 'Update'), ['update', 'id' => $model->id, 'costos_id' => $model->costos_id, 'costos_General_id' => $model->costos_General_id, 'costos_CostoParametro_id' => $model->costos_CostoParametro_id, 'costos_CostoParametro_Parametros_id' => $model->costos_CostoParametro_Parametros_id, 'costos_costoMuestra_id' => $model->costos_costoMuestra_id, 'General_id' => $model->General_id, 'Muestras_id' => $model->Muestras_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('models', 'Delete'), ['delete', 'id' => $model->id, 'costos_id' => $model->costos_id, 'costos_General_id' => $model->costos_General_id, 'costos_CostoParametro_id' => $model->costos_CostoParametro_id, 'costos_CostoParametro_Parametros_id' => $model->costos_CostoParametro_Parametros_id, 'costos_costoMuestra_id' => $model->costos_costoMuestra_id, 'General_id' => $model->General_id, 'Muestras_id' => $model->Muestras_id], [
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
            'fPeticion',
            'cadena',
            'fVencimiento',
            'fCreacion',
            'referencia_id',
            'costos_id',
            'costos_General_id',
            'costos_CostoParametro_id',
            'costos_CostoParametro_Parametros_id',
            'costos_costoMuestra_id',
            'General_id',
            'Muestras_id',
        ],
    ]) ?>

</div>
