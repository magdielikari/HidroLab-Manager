<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\CaracterizacionHasEquipos */

$this->title = Yii::t('models', 'Create Caracterizacion Has Equipos');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Caracterizacion Has Equipos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="caracterizacion-has-equipos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
