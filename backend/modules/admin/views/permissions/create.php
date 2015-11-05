<?php 
use yii\helpers\Html;

$this->title = Yii::t('app', 'Create Permission');

$this->params['breadcrumbs'][] = ['label'=>Yii::t('app', 'Admin'), 'url'=>['main/index']];
$this->params['breadcrumbs'][] = ['label'=>Yii::t('app', 'Permissions'), 'url'=>['permissions/index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<?= Html::beginForm('', 'POST') ?>
<div class="form-group">
	<?= Html::label(Yii::t('app', 'Permision Name'), null, ['class'=>'control-label']) ?>
	<?= Html::input('text', 'permission[name]', null, ['class'=>'form-control']) ?>
</div>

<div class="form-group">
	<?= Html::label(Yii::t('app', 'Permision Description'), null, ['class'=>'control-label']) ?>
	<?= Html::input('text', 'permission[description]', null, ['class'=>'form-control']) ?>
</div>

<div class="form-group">
	<?= Html::submitButton(Yii::t('app', 'Create'), ['class'=>'btn btn-success']) ?>
</div>

<?= Html::endForm() ?>