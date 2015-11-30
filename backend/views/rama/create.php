<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Rama */

$this->title = Yii::t('models', 'Create Rama');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Ramas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rama-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
