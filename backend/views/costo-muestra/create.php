<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\CostoMuestra */

$this->title = Yii::t('models', 'Create Costo Muestra');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Costo Muestras'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="costo-muestra-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
