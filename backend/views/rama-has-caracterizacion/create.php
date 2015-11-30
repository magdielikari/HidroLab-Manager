<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\RamaHasCaracterizacion */

$this->title = Yii::t('models', 'Create Rama Has Caracterizacion');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Rama Has Caracterizacions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rama-has-caracterizacion-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
