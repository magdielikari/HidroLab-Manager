<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Clientes */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Clientes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clientes-view">

	<h1><?= Html::encode($this->title) ?></h1>

	<p>
		<?= Html::Button('Select', [
			'class'=>'btn btn-primary buttonSelect',
			'data'=>[
				'model'=>['cliente'=>$model->attributes]
			]
		]) ?>
	</p>

	<?= DetailView::widget([
		'model' => $model,
		'attributes' => [
			'id',
			'nombre',
			'direccion:ntext',
			'email:email',
			'encargado',
			'nRif',
			'cRif',
			'siglas',
			'contador',
		],
	]) ?>

</div>
