<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Referencia */

$this->title = Yii::t('models', 'Create Referencia');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Referencias'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="referencia-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
