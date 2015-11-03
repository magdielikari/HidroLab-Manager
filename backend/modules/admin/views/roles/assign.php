<?php

use yii\helpers\Html;

$this->title = Yii::t('app', 'Assign Role');

$this->params['breadcrumbs'][] = ['label'=>Yii::t('app', 'Admin'), 'url'=>['main/index']];
$this->params['breadcrumbs'][] = ['label'=>Yii::t('app', 'Roles'), 'url'=>['roles/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?= Html::beginForm('', 'post') ?>
<div class="row">
	<!-- List of roles -->
	<div id="roleList" class="col-md-6">
		<div class="list-group">
			<?php foreach($roles as $role): ?>
				<a href="#" class="list-group-item">
					<div class="row">
						<div class="col-md-11">
							<h4 class="list-group-item-heading"><?= $role->name ?></h4>
							<p class="list-group-item-text"><?= $role->description ?></p>
						</div>
						<div class="col-md-1">
							<?= Html::radio('assign[role]', false, ['value'=>$role->name]) ?>
						</div>
					</div>
				</a>
			<?php endforeach; ?>
		</div>
	</div>

	<!-- List of permissions -->
	<div class="col-md-6">
		<div class="list-group">
			<?php foreach($permissions as $permission): ?>
				<a href="#" class="list-group-item">
					<div class="row">
						<div class="col-md-11">
							<?= $permission->name ?>
						</div>
						<div class="col-md-1">
							<?= Html::checkbox('assign[permission][]', false, ['value'=>$permission->name]) ?>
						</div>
					</div>
				</a>
			<?php endforeach; ?>
		</div>
	</div>
</div>

<?= Html::submitButton(Yii::t('app', 'Submit'), ['class'=>'btn btn-success']) ?>
<?= Html::endForm() ?>