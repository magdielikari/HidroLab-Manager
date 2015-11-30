<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Dialaborables */

$this->title = Yii::t('models', 'Create Dialaborables');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Dialaborables'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dialaborables-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
