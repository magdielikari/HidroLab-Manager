<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Prestaciones */

$this->title = Yii::t('models', 'Create Prestaciones');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Prestaciones'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prestaciones-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
