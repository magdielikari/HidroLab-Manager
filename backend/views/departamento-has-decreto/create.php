<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\DepartamentoHasDecreto */

$this->title = Yii::t('models', 'Create Departamento Has Decreto');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Departamento Has Decretos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="departamento-has-decreto-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
