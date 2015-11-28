<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\DecretoHasTipo */

$this->title = Yii::t('models', 'Create Decreto Has Tipo');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Decreto Has Tipos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="decreto-has-tipo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
