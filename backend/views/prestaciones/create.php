<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Prestaciones */

$this->title = Yii::t('models', 'Create Prestaciones');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Prestaciones'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prestaciones-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
