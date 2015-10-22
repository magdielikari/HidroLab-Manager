<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\CostopredeterminadosHasCostomuestra */

$this->title = Yii::t('models', 'Create Costopredeterminados Has Costomuestra');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Costopredeterminados Has Costomuestras'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="costopredeterminados-has-costomuestra-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
