<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Muestras */

$this->title = Yii::t('models', 'Create Muestras');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Muestras'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="muestras-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
