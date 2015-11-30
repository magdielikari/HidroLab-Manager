<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Equipos */

$this->title = Yii::t('models', 'Create Equipos');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Equipos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="equipos-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
