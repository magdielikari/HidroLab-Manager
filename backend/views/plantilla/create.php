<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Plantilla */

$this->title = Yii::t('models', 'Create Plantilla');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Plantillas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="plantilla-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
