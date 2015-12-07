<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\ParametrosHasMuestrasHasCostopredeterminados */

$this->title = $model->Parametros_has_Muestras_Parametros_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Parametros Has Muestras Has Costopredeterminados'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parametros-has-muestras-has-costopredeterminados-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('models', 'Update'), ['update', 'Parametros_has_Muestras_Parametros_id' => $model->Parametros_has_Muestras_Parametros_id, 'Parametros_has_Muestras_Muestras_id' => $model->Parametros_has_Muestras_Muestras_id, 'CostoPredeterminados_id' => $model->CostoPredeterminados_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('models', 'Delete'), ['delete', 'Parametros_has_Muestras_Parametros_id' => $model->Parametros_has_Muestras_Parametros_id, 'Parametros_has_Muestras_Muestras_id' => $model->Parametros_has_Muestras_Muestras_id, 'CostoPredeterminados_id' => $model->CostoPredeterminados_id], [
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
            'Parametros_has_Muestras_Parametros_id',
            'Parametros_has_Muestras_Muestras_id',
            'CostoPredeterminados_id',
            'cantidad',
        ],
    ]) ?>

</div>
