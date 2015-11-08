<?php 
use yii\helpers\Html;
use yii\helpers\ArrayHelper;

$this->title = Yii::t('app', 'Update Role');

$this->params['breadcrumbs'][] = ['label'=>Yii::t('app', 'Admin'), 'url'=>['index']];
$this->params['breadcrumbs'][] = ['label'=>Yii::t('app', 'Roles'), 'url'=>['roles/index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<?= Html::beginForm('', 'POST') ?>
<div class="form-group">
	<?= Html::label(Yii::t('app', 'Role Name'), null, ['class'=>'control-label']) ?>
	<?= Html::input('text', 'role[name]', $role->name, ['class'=>'form-control']) ?>
</div>

<div class="form-group">
	<?= Html::label(Yii::t('app', 'Role Description'), null, ['class'=>'control-label']) ?>
	<?= Html::input('text', 'role[description]', $role->description, ['class'=>'form-control']) ?>
</div>

<div class="form-group">
	<?= Html::submitButton(Yii::t('app', 'Save'), ['class'=>'btn btn-success']) ?>
</div>

<?= Html::endForm() ?>