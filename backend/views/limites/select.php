<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Url;
use yii\helpers\Json;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\LimitesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('models', 'Limites');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="limites-index">

	<h1><?= Html::encode($this->title) ?></h1>
	<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

	<p>
		<?= Html::button(Yii::t('models', 'Create Limites'), ['value'=>Url::to('create'),
		'class' => 'btn btn-success modalButton', 'data-title'=>'Create limites']) ?>
	</p>

	<?php Pjax::begin();?>
	<?= GridView::widget([
		'dataProvider' => $dataProvider,
		'filterModel' => $searchModel,
		'tableOptions'=>[
			'class'=>'table table-striped table-bordered table-hover',
			'data'=>[
				'selector'=>'parametros'
			]
		],
		'columns' => [
			['class' => 'yii\grid\SerialColumn'],

			'liminf',
			'limsup',
			'departamento.nombre',
			'decreto.nombre',
			'tipo.nombre',
			'subTipo.nombre',
			'caracterizacion.nombre',
			'rama.nombre',	
			[
				'class' => 'yii\grid\CheckboxColumn',
				'checkboxOptions'=>function($model, $key, $index, $column){
					$data = $model->relatedRecords;
					$data['id'] = $model->id;

					return ['value'=>Json::encode($data)];
				}
			],
		],
	]); ?>
	<?php Pjax::end();?>

	<p><?= Html::button(Yii::t('app', 'Select'), ['class'=>'btn btn-primary buttonSelectMultiple', 'data'=>[
		'save'=>'true',
		'url'=>Url::to(['parametros/create']),
		'from'=>'Limites_id'
	]])   ?></p>
</div>
<?php echo $this->renderFile('@backend/views/herramientas/modal.php'); ?>

