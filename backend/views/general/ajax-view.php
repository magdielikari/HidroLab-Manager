<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;


/* @var $this yii\web\View */
/* @var $model common\models\General */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Generals'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="general-view">

	<h1><?= Html::encode($this->title) ?></h1>

	<p>
		<?= Html::button(Yii::t('models', 'Select'), [
			'class' => 'btn btn-danger buttonSelect',
			'data' => [
				'url'=>Url::to(['general/select']),
				'model'=>['general'=>$model->attributes]
			],
		]) ?>
	</p>

	<?= DetailView::widget([
		'model' => $model,
		'attributes' => [
			'id',
			'copias',
			'caudal',
			'analisis',
			'Departamento_id',
			'Decreto_id',
			'Clientes_id',
			'Vendedor_id',
		],
	]) ?>

</div>
