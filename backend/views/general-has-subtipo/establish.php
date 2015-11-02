<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\GeneralHasSubtipo */

$this->title = Yii::t('models', 'Create General Has Subtipo');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'General Has Subtipos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

	<p>
     <?= Html::button(Yii::t('models', 'Seleccionar Sub Tipos'), ['data-dismiss'=>"modal",
     'class' => 'btn btn-warning modalButton']) ?>
    </p>  

<div class="general-has-subtipo-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
