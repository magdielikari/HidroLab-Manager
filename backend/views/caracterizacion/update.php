<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Caracterizacion */

$this->title = Yii::t('app\messages\es-MX\models.php', 'Update {modelClass}: ', [
    'modelClass' => 'Caracterizacion',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app\messages\es-MX\models.php', 'Caracterizacions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app\messages\es-MX\models.php', 'Update');
?>
<div class="caracterizacion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
