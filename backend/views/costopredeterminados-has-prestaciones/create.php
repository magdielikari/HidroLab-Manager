<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\CostopredeterminadosHasPrestaciones */

$this->title = Yii::t('models', 'Create Costopredeterminados Has Prestaciones');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Costopredeterminados Has Prestaciones'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="costopredeterminados-has-prestaciones-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
