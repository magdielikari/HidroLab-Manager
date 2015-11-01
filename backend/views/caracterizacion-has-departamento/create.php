<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\CaracterizacionHasDepartamento */

$this->title = Yii::t('models', 'Create Caracterizacion Has Departamento');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Caracterizacion Has Departamentos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="caracterizacion-has-departamento-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
