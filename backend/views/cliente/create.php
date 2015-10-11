<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Cliente */

$this->title = Yii::t('models', 'Create Cliente');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Clientes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cliente-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
