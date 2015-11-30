<?php 
use yii\helpers\Html;
use yii\helpers\ArrayHelper;

$this->title = Yii::t('app', 'Create Role');

$this->params['breadcrumbs'][] = ['label'=>Yii::t('app', 'Admin'), 'url'=>['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<?= Html::beginForm('', 'POST') ?>
<div class="form-group">
	<?= Html::label(Yii::t('app', 'Role Name'), null, ['class'=>'control-label']) ?>
	<?= Html::input('text', 'role[name]', null, ['class'=>'form-control']) ?>
</div>

<div class="form-group">
	<?= Html::label(Yii::t('app', 'Role Description'), null, ['class'=>'control-label']) ?>
	<?= Html::input('text', 'role[description]', null, ['class'=>'form-control']) ?>
</div>

<div class="form-group">
	<?= Html::submitButton(Yii::t('app', 'Create'), ['class'=>'btn btn-success']) ?>
</div>

<?= Html::endForm() ?>
