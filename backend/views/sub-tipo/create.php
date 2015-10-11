<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\SubTipo */

$this->title = Yii::t('models', 'Create Sub Tipo');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Sub Tipos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sub-tipo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
