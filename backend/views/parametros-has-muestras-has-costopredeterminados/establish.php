<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ParametrosHasMuestrasHasCostopredeterminados */

$this->title = Yii::t('models', 'Create Parametros Has Muestras Has Costopredeterminados');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Parametros Has Muestras Has Costopredeterminados'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parametros-has-muestras-has-costopredeterminados-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
