<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Limites */

$this->title = Yii::t('models', 'Create Limites');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Limites'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="limites-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
