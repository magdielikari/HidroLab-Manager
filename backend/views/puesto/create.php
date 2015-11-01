<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Puesto */

$this->title = Yii::t('models', 'Create Puesto');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Puestos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="puesto-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
