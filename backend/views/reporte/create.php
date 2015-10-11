<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Reporte */

$this->title = Yii::t('models', 'Create Reporte');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Reportes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reporte-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
