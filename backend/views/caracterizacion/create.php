<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Caracterizacion */

$this->title = Yii::t('models', 'Create Caracterizacion');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Caracterizacions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="caracterizacion-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
