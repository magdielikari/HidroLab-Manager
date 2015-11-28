<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Subtipo */

$this->title = Yii::t('models', 'Create Subtipo');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Subtipos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subtipo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
