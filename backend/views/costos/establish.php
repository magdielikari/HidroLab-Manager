<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Costos */

$this->title = Yii::t('models', 'Create Costos');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Costos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="costos-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
