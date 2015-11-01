<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\CostopredeterminadosHasCostoparametro */

$this->title = Yii::t('models', 'Create Costopredeterminados Has Costoparametro');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Costopredeterminados Has Costoparametros'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="costopredeterminados-has-costoparametro-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
