<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Clientes */

$this->title = Yii::t('models', 'Create Clientes');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Clientes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clientes-create">

    <p>
     <?= Html::button(Yii::t('models', 'Seleccionar Clientes'), ['data-dismiss'=>"modal",
     'class' => 'btn btn-warning modalButton']) ?>
    </p>  


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
