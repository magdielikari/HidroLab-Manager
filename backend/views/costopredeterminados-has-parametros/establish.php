<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\CostopredeterminadosHasParametros */

$this->title = Yii::t('models', 'Create Costopredeterminados Has Parametros');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Costopredeterminados Has Parametros'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="costopredeterminados-has-parametros-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
