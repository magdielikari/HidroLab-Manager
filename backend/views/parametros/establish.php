<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Parametros */

//$this->title = Yii::t('models', 'Create Parametros');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Parametros'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

    <p>
     <?= Html::button(Yii::t('models', 'Seleccionar Parametros'), ['data-dismiss'=>"modal",
     'class' => 'btn btn-warning modalButton']) ?>
    </p>  

<div class="parametros-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
