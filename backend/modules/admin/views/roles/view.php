<?php 
use yii\bootstrap\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use yii\helpers\Url;

$this->title = Html::encode(Yii::t('app', 'Role').' - '.$role->name);

$this->params['breadcrumbs'][] = ['label'=>Yii::t('app', 'Admin'), 'url'=>['main/index']];
$this->params['breadcrumbs'][] = ['label'=>Yii::t('app', 'Roles'), 'url'=>['roles/index']];
$this->params['breadcrumbs'][] = Html::encode($role->name);
?>

<h1><?= Html::encode($this->title) ?></h1>

<?= DetailView::widget([
	'model'=>$role,
	'attributes'=>[
		'name',
		'description',
		[
			'attribute'=>'createdAt',
			'value'=>date('Y-m-d H:i', $role->createdAt)
		]
	]
]) ?>	
<hr>
<div class="row">
	<div class="col-md-6">
		<!-- List of assigned permissions -->
		<h3><?= Html::encode(Yii::t('app', 'Permissions')) ?></h3>

		<?= GridView::widget([
			'dataProvider' => $dataProvider,
			'columns' => [
				['class' => 'yii\grid\SerialColumn'],

				'name',
				'description',

				[
					'class' => 'yii\grid\ActionColumn',
					'template'=>'{delete}',
					'buttons'=>[
						// Unset permission button
						'delete'=>function($url, $model) use($role){
							$url = Url::to(['unset', 'name'=>$model->name, 'role'=>$role->name]);

							return Html::a(Html::icon('remove'), $url, [
								'data-pjax'=>0,
								'data-method'=>'post',
								'data-confirm'=>Yii::t('app', 'Are you sure you want to delete this item?'),
								'aria-label'=>'Remove',
								'title'=>'Remove'
							]);
						},
					]
				],
			],
		]); ?>
	</div>
	<div class="col-md-6">
		<h3><?= Html::encode(Yii::t('app', 'Users')) ?></h3>
		<?= GridView::widget([
			'dataProvider' => $users,
			'columns' => [
				['class' => 'yii\grid\SerialColumn'],

				'username',
				[
					'attribute'=>'assigned at',
					'value'=>function($model){
						return date('Y-m-d H:i', $model['created_at']);
					}
				],

				[
					'class' => 'yii\grid\ActionColumn',
					'template'=>'{delete}',
					'buttons'=>[
						'delete'=>function($url, $model) use($role){
							$url = Url::to(['revoke', 'id'=>$model['id'], 'role'=>$role->name]);

							return Html::a(Html::icon('remove'), $url, [
								'data-pjax'=>0,
								'data-method'=>'post',
								'data-confirm'=>Yii::t('app', 'Are you sure you want to delete this item?'),
								'aria-label'=>'Remove',
								'title'=>'Remove'
							]);
						},
					]
				],
			],
		]); ?>
	</div>
</div>