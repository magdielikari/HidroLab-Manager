<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Carea */

$this->title = Yii::t('models', 'Create Carea');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Careas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carea-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
