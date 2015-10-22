<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\CostopredeterminadosHasCostoparametro */

$this->title = $model->CostoPredeterminados_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Costopredeterminados Has Costoparametros'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="costopredeterminados-has-costoparametro-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('models', 'Update'), ['update', 'CostoPredeterminados_id' => $model->CostoPredeterminados_id, 'CostoParametro_id' => $model->CostoParametro_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('models', 'Delete'), ['delete', 'CostoPredeterminados_id' => $model->CostoPredeterminados_id, 'CostoParametro_id' => $model->CostoParametro_id], [
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
            'CostoPredeterminados_id',
            'CostoParametro_id',
            'cantidad',
            'k',
            'unidad',
        ],
    ]) ?>

</div>
