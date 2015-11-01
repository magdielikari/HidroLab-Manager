<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Departamento */

$this->title = Yii::t('models', 'Create Departamento');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Departamentos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="departamento-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
