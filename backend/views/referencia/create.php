<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Referencia */

$this->title = Yii::t('models', 'Create Referencia');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Referencias'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="referencia-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
