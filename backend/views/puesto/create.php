<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Puesto */

$this->title = Yii::t('models', 'Create Puesto');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Puestos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="puesto-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
