<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Caracterizacion */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app\messages\es-MX\models.php', 'Caracterizacions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="caracterizacion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app\messages\es-MX\models.php', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app\messages\es-MX\models.php', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app\messages\es-MX\models.php', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nombre',
            'Preservacion',
            'Siglas',
            'Laboratorio',
            'Opacidad',
            'Metodo',
            'Tipo',
            'Equipos_id',
        ],
    ]) ?>

</div>
