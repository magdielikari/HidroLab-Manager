<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Vendedor */

$this->title = Yii::t('models', 'Create Vendedor');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Vendedors'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vendedor-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
