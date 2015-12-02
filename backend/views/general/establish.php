<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\General */

//$this->title = Yii::t('models', 'Create General');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Generals'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

    <p>
     <?= Html::button(Yii::t('models', 'Seleccionar General'), ['data-dismiss'=>"modal",
     'class' => 'btn btn-warning modalButton']) ?>
    </p>  

<div class="general-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
