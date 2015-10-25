<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\RamaHasGeneral */

//$this->title = Yii::t('models', 'Create Rama Has General');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Rama Has Generals'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

    <p>
     <?= Html::button(Yii::t('models', 'Seleccionar Rama-has-General'), ['data-dismiss'=>"modal",
     'class' => 'btn btn-warning modalButton']) ?>
    </p>  

<div class="rama-has-general-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
