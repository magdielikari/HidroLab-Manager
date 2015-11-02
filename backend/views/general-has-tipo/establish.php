<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\GeneralHasTipo */

$this->title = Yii::t('models', 'Create General Has Tipo');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'General Has Tipos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

    <p>
     <?= Html::button(Yii::t('models', 'Seleccionar Tipos'), ['data-dismiss'=>"modal",
     'class' => 'btn btn-warning modalButton']) ?>
    </p>  

<div class="general-has-tipo-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
