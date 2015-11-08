<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ParametrosHasMuestras */

$this->title = Yii::t('models', 'Create Parametros Has Muestras');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Parametros Has Muestras'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parametros-has-muestras-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
