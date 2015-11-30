<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\GeneralHasSubtipo */

$this->title = Yii::t('models', 'Create General Has Subtipo');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'General Has Subtipos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="general-has-subtipo-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
