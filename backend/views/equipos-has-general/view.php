<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\EquiposHasGeneral */

$this->title = $model->Equipos_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Equipos Has Generals'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="equipos-has-general-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('models', 'Update'), ['update', 'Equipos_id' => $model->Equipos_id, 'General_id' => $model->General_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('models', 'Delete'), ['delete', 'Equipos_id' => $model->Equipos_id, 'General_id' => $model->General_id], [
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
            'Equipos_id',
            'General_id',
        ],
    ]) ?>

</div>
