<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Costopredeterminados */

$this->title = Yii::t('models', 'Create Costopredeterminados');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Costopredeterminados'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="costopredeterminados-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
