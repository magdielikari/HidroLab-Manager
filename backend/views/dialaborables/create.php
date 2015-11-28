<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Dialaborables */

$this->title = Yii::t('models', 'Create Dialaborables');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Dialaborables'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dialaborables-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
