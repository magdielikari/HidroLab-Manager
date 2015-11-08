<?php 
use yii\helpers\Html;
use yii\helpers\ArrayHelper;

$this->title = Yii::t('app', 'Update Permission');

$this->params['breadcrumbs'][] = ['label'=>Yii::t('app', 'Admin'), 'url'=>['index']];
$this->params['breadcrumbs'][] = ['label'=>Yii::t('app', 'Permissions'), 'url'=>['permissions/index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<?= Html::beginForm('', 'POST') ?>
<div class="form-group">
	<?= Html::label(Yii::t('app', 'Permission Name'), null, ['class'=>'control-label']) ?>
	<?= Html::input('text', 'permission[name]', $permission->name, ['class'=>'form-control']) ?>
</div>

<div class="form-group">
	<?= Html::label(Yii::t('app', 'Permission Description'), null, ['class'=>'control-label']) ?>
	<?= Html::input('text', 'permission[description]', $permission->description, ['class'=>'form-control']) ?>
</div>

<div class="form-group">
	<?= Html::submitButton(Yii::t('app', 'Save'), ['class'=>'btn btn-success']) ?>
</div>

<?= Html::endForm() ?>