<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\CostopredeterminadosHasAdministrativos */

$this->title = Yii::t('models', 'Create Costopredeterminados Has Administrativos');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Costopredeterminados Has Administrativos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="costopredeterminados-has-administrativos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
