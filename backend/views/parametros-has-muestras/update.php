<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ParametrosHasMuestras */

$this->title = Yii::t('models', 'Update {modelClass}: ', [
    'modelClass' => 'Parametros Has Muestras',
]) . ' ' . $model->Parametros_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Parametros Has Muestras'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Parametros_id, 'url' => ['view', 'Parametros_id' => $model->Parametros_id, 'Muestras_id' => $model->Muestras_id]];
$this->params['breadcrumbs'][] = Yii::t('models', 'Update');
?>
<div class="parametros-has-muestras-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
