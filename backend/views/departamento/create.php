<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Departamento */

$this->title = Yii::t('models', 'Create Departamento');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Departamentos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="departamento-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
