<?php
use yii\helpers\Html;
use common\widgets\Thumbnail;

$this->title = Yii::t('app', 'Admin');
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= Html::encode($this->title) ?></h1>
<div class="row">
    <div class="col-sm-6 col-md-4">
        <?= Thumbnail::widget([
            'label'=>Yii::t('app', 'Authorization'),
            'content'=>'Set the access configuration',
            'bottom'=>[
                ['name'=>Yii::t('app', 'Permissions'), 'value'=>['permissions\index'], ['class'=>'btn btn-success']],
                ['name'=>Yii::t('app', 'Roles'), 'value'=>['roles\index'], ['class'=>'btn btn-success']]
            ]
        ]) ?>
    </div>
</div>
