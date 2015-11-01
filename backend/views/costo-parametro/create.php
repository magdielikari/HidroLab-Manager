<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\CostoParametro */

$this->title = Yii::t('models', 'Create Costo Parametro');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Costo Parametros'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="costo-parametro-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
