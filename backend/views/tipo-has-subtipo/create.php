<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TipoHasSubtipo */

$this->title = Yii::t('models', 'Create Tipo Has Subtipo');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Tipo Has Subtipos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-has-subtipo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
