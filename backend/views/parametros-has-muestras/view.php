<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\ParametrosHasMuestras */

$this->title = $model->Parametros_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Parametros Has Muestras'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parametros-has-muestras-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('models', 'Update'), ['update', 'Parametros_id' => $model->Parametros_id, 'Muestras_id' => $model->Muestras_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('models', 'Delete'), ['delete', 'Parametros_id' => $model->Parametros_id, 'Muestras_id' => $model->Muestras_id], [
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
            'Parametros_id',
            'Muestras_id',
        ],
    ]) ?>

</div>
