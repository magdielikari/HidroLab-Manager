<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Caracterizacion */

$this->title = Yii::t('app\messages\es-MX\models.php', 'Create Caracterizacion');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app\messages\es-MX\models.php', 'Caracterizacions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="caracterizacion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
