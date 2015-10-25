<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Peticion */

//$this->title = Yii::t('models', 'Create Peticion');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Peticions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
    <p>
     <?= Html::button(Yii::t('models', 'Seleccionar Peticion'), ['data-dismiss'=>"modal",
     'class' => 'btn btn-warning modalButton']) ?>
    </p>  

<div class="peticion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
