<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\CostoParametro */

$this->title = Yii::t('models', 'Update {modelClass}: ', [
    'modelClass' => 'Costo Parametro',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Costo Parametros'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'Parametros_id' => $model->Parametros_id]];
$this->params['breadcrumbs'][] = Yii::t('models', 'Update');
?>
<div class="costo-parametro-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
