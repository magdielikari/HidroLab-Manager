<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Decreto */

$this->title = Yii::t('models', 'Create Decreto');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Decretos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="decreto-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
