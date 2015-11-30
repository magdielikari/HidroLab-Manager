<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Peticion */

$this->title = Yii::t('models', 'Create Peticion');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Peticions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peticion-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
