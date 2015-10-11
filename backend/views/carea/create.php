<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\CArea */

$this->title = Yii::t('app\messages\es-MX\models.php', 'Create Carea');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app\messages\es-MX\models.php', 'Careas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carea-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
