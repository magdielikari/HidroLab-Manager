<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Administrativos */

$this->title = Yii::t('models', 'Create Administrativos');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Administrativos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="administrativos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
