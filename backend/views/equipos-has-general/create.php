<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\EquiposHasGeneral */

$this->title = Yii::t('models', 'Create Equipos Has General');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Equipos Has Generals'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="equipos-has-general-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
