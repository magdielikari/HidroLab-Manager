<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Subtipo */

$this->title = Yii::t('models', 'Create Subtipo');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Subtipos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subtipo-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
