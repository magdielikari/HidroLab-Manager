<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\CostoPredeterminados */

$this->title = Yii::t('models', 'Create Costo Predeterminados');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Costo Predeterminados'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="costo-predeterminados-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
