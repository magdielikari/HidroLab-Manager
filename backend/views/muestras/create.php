<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Muestras */

//$this->title = Yii::t('models', 'Create Muestras');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Muestras'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

    <p>
     <?= Html::button(Yii::t('models', 'Seleccionar Muestra'), ['data-dismiss'=>"modal",
     'class' => 'btn btn-warning modalButton']) ?>
    </p>  

<div class="muestras-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
