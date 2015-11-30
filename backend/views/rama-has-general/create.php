<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\RamaHasGeneral */

$this->title = Yii::t('models', 'Create Rama Has General');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Rama Has Generals'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rama-has-general-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
