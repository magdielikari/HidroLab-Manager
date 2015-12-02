<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\EquiposHasGeneral */

//$this->title = Yii::t('models', 'Create Equipos Has General');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Equipos Has Generals'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

    <p>
     <?= Html::button(Yii::t('models', 'Seleccionar Equipos-has-General'), ['data-dismiss'=>"modal",
     'class' => 'btn btn-warning modalButton']) ?>
    </p>  

<div class="equipos-has-general-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
