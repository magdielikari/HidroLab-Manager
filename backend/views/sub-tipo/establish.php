<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\SubTipo */

$this->title = Yii::t('models', 'Create Sub Tipo');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Sub Tipos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

    <p>
     <?= Html::button(Yii::t('models', 'Crear Sub-Tipos'), ['data-dismiss'=>"modal",
     'class' => 'btn btn-warning modalButton']) ?>
    </p>  

<div class="sub-tipo-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
