<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Moneda */

$this->title = Yii::t('models', 'Create Moneda');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Monedas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="moneda-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
