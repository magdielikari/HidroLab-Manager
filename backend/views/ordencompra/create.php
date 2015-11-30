<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Ordencompra */

$this->title = Yii::t('models', 'Create Ordencompra');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Ordencompras'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ordencompra-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
