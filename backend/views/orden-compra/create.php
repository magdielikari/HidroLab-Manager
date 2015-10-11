<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\OrdenCompra */

$this->title = Yii::t('models', 'Create Orden Compra');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Orden Compras'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orden-compra-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
