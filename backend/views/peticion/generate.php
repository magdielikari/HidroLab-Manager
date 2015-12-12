<?php 

use yii\helpers\Html;
use yii\widgets\Pjax;
use common\widgets\Thumbnail; 
use yii\helpers\Url;
use yii\web\View;
	
$this->title = Yii::t('models', 'Crear Peticion');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Peticion'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

// Definicion de la variable de la url ajax para las peticiones de cookies
$this->registerJs('var ajaxDir = "'.Url::to(['ajax-cookie']).'";', View::POS_HEAD);
$this->registerJsFile('@web/js/peticion.js', ['depends'=>\yii\web\JqueryAsset::className()]);
?>
<?php echo $this->renderFile('@backend/views/herramientas/modal.php'); ?>

<div class="row">
	<div class="col-sm-6 col-md-4">
		<?= Thumbnail::widget([
			'label'=>'Clientes',
			'content'=>'Se solicita información de Nombre de los Clientes',
			'htmlOptions'=>[
				'data'=>['name'=>'cliente']
			],
			'bottom'=>[
				['name'=>'Seleccionar Tipos','value'=>['clientes/select'],
					'options'=>[
						'class'=>'btn btn-info modalSelect',
						'data'=>[
							'title'=>'Seleccionar Clientes'
						]
					]
				],
				['name'=>'Crear Tipos','value'=>['clientes/establish'],
					'options'=>[
						'class'=>'btn btn-success modalSelect',
						'data'=>[
							'title'=>'Crear Clientes'
						]
					]
				]
			]
		])?> 
	</div>
	<div class="col-sm-6 col-md-4">
		<?= Thumbnail::widget([
			'label'=>'General',
			'content'=>'Se solicita información de: Numero de Copias del informe, Si tiene Caudal, si tiene Analisis, 
									cual departamento Departamento para que Decreto y cual clientes',
			'htmlOptions'=>[
				'data'=>['name'=>'general',
					'depends'=>'cliente'
				]
			],
			'bottom'=>[
				['name'=>'Seleccionar General','value'=>['general/select'],
					'options'=>[
						'class'=>'btn btn-info modalSelect',
						'data'=>[
							'title'=>'Seleccionar General'
						]
					]
				],
				['name'=>'Crear General','value'=>['general/establish'],
					'options'=>[
						'class'=>'btn btn-success modalSelect',
						'data'=>[
							'title'=>'Crear General'
						]
					]
				]
			]
		])?> 
	</div>
	<div class="col-sm-6 col-md-4">
		<?= Thumbnail::widget([
			'label'=>'Tipos',
			'content'=>'Se solicita información de Nombre de las Tipos',
			'htmlOptions'=>[
				'data'=>['name'=>'tipos',
					'depends'=>'general'
				]
			],
			'bottom'=>[
				['name'=>'Seleccionar Tipos','value'=>['decreto-has-tipo/select'],
					'options'=>[
						'class'=>'btn btn-info modalSelect',
						'data'=>[
							'title'=>'Seleccionar Tipos',
							'depends'=>'general',
							'column'=>'Decreto_id'
						]
					]
				],
				['name'=>'Crear Tipos','value'=>['general-has-tipo/establish'],
					'options'=>[
						'class'=>'btn btn-success modalSelect',
						'data'=>[
							'title'=>'Crear Tipos'
						]
					]
				]
			]
		])?> 
	</div>
 </div>

<div class="row">
	<div class="col-sm-6 col-md-4">
		<?= Thumbnail::widget([
			'label'=>'Sub-Tipos',
			'content'=>'Se solicita información de Nombre de las Sub-Tipos',
			'htmlOptions'=>[
				'data'=>['name'=>'subTipos',
					'depends'=>'tipos'
				]
			],
			'bottom'=>[
				['name'=>'Seleccionar Sub-Tipos','value'=>['tipo-has-subtipo/select'],
					'options'=>[
						'class'=>'btn btn-info modalSelect',
						'data'=>[
							'title'=>'Seleccionar Sub-Tipos',
							'depends'=>'tipos',
							'array'=>true,
							'column'=>'Tipo_id'
						]
					]
				],
				['name'=>'Crear Sub-Tiposs','value'=>['general-has-subtipo/establish'],
					'options'=>[
						'class'=>'btn btn-success modalSelect',
						'data'=>[
							'title'=>'Crear Sub-Tipos'
						]
					]
				]
			]
		])?> 
	</div>
	<div class="col-sm-6 col-md-4">
		<?= Thumbnail::widget([
			'label'=>'Ramas',
			'content'=>'Se solicita información de Nombre de las Ramas',
			'htmlOptions'=>[
				'data'=>['name'=>'ramas',
					'depends'=>'subTipos'
				]
			],
			'bottom'=>[
				['name'=>'Seleccionar Ramas','value'=>['rama-has-general/select'],
					'options'=>[
						'class'=>'btn btn-info modalSelect',
						'data'=>[
							'title'=>'Seleccionar Ramas'
						]
					]
				],
				['name'=>'Crear Ramas','value'=>['rama-has-general/establish'],
					'options'=>[
						'class'=>'btn btn-success modalSelect',
						'data'=>[
							'title'=>'Crear Ramas'
						]
					]
				]
			]
		])?> 
	</div>
	<div class="col-sm-6 col-md-4">
		<?= Thumbnail::widget([
			'label'=>'Parámetros',
			'content'=>'Se solicita información de los parámetros',
			'htmlOptions'=>[
				'data'=>['name'=>'parametros',
					'depends'=>'ramas'
				]
			],
			'bottom'=>[
				['name'=>'Seleccionar Parámetros','value'=>['parametros/select'],
					'options'=>[
						'class'=>'btn btn-info modalSelect',
						'data'=>[
							'title'=>'Seleccionar Parámetros'
						]
					]
				],
				['name'=>'Crear Parámetros','value'=>['parametros/establish'],
					'options'=>[
						'class'=>'btn btn-success modalSelect',
						'data'=>[
							'title'=>'Crear Parámetros'
						]
					]
				]
			]
		])?> 
	</div>
 </div>

 <div class="row">
		<div class="col-sm-6 col-md-4">
		<?= Thumbnail::widget([
			'label'=>'Muestras',
			'content'=>'Se solicita información de Nombre de las Muestras, su tipo, la hora de muestreo',
			'htmlOptions'=>[
				'data'=>['name'=>'muestras',
					'depends'=>'parametros'
				]
			],
			'bottom'=>[
				['name'=>'Seleccionar Muestras','value'=>['muestras/select'],
					'options'=>[
						'class'=>'btn btn-info modalSelect',
						'data'=>[
							'title'=>'Seleccionar Muestras'
						]
					]
				],
				['name'=>'Crear Muestras','value'=>['muestras/establish'],
					'options'=>[
						'class'=>'btn btn-success modalSelect',
						'data'=>[
							'title'=>'Crear Muestras'
						]
					]
				]
			]
		])?> 
	</div>
		<div class="col-sm-6 col-md-4">
		<?= Thumbnail::widget([
			'label'=>'Muestras',
			'content'=>'Se solicita información de Nombre de las Muestras, su tipo, la hora de muestreo',
			'htmlOptions'=>[
				'data'=>['name'=>'muestreo',
					'depends'=>'muestras'
				]
			],
			'bottom'=>[
				['name'=>'Seleccionar Muestras','value'=>['muestras/select'],
					'options'=>[
						'class'=>'btn btn-info modalSelect',
						'data'=>[
							'title'=>'Seleccionar Muestras'
						]
					]
				],
				['name'=>'Crear Muestras','value'=>['muestras/establish'],
					'options'=>[
						'class'=>'btn btn-success modalSelect',
						'data'=>[
							'title'=>'Crear Muestras'
						]
					]
				]
			]
		])?> 
	</div>
		<div class="col-sm-6 col-md-4">
		<?= Thumbnail::widget([
			'label'=>'Equipos has General',
			'content'=>'Se solicita información de Nombre de las Equipos has General, su tipo, la hora de muestreo',
			'htmlOptions'=>[
				'data'=>['name'=>'equiposGeneral',
					'depends'=>'muestreo'
				]
			],
			'bottom'=>[
				['name'=>'Seleccionar Equipos','value'=>['equipos-has-general/select'],
					'options'=>[
						'class'=>'btn btn-info modalSelect',
						'data'=>[
							'title'=>'Seleccionar Equipos has General'
						]
					]
				],
				['name'=>'Crear Equipos','value'=>['equipos-has-general/establish'],
					'options'=>[
						'class'=>'btn btn-success modalSelect',
						'data'=>[
							'title'=>'Crear Equipos has General'
						]
					]
				]
			]
		])?> 
	</div>
</div>
	
<div class="row">  
	<div class="col-sm-6 col-md-4">
		<?= Thumbnail::widget([
			'label'=>'Costo Muestreo',
			'content'=>'Se seleciona Parametros & las Muestras de acuerdo a la presevaciones para luego asignarles un costo asociado',
			'htmlOptions'=>[
				'data'=>['name'=>'costoMuestreo',
					'depends'=>'equiposGeneral'
				]
			],
			'bottom'=>[
				['name'=>'Seleccionar Costo M.','value'=>['parametros-has-muestras-has-costopredeterminados/select'],
					'options'=>[
						'class'=>'btn btn-info modalSelect',
						'data'=>'Seleccionar Costos Muestra'
					]
				],
				['name'=>'Crear Costos M.','value'=>['parametros-has-muestras-has-costopredeterminados/establish'],
					'options'=>[
						'class'=>'btn btn-success modalSelect',
						'data'=>'Crear Costos Muestra'
					]
				]
			]
		])?> 
	</div>
	<div class="col-sm-6 col-md-4">
		<?= Thumbnail::widget([
			'label'=>'Costos Parámetro',
			'content'=>'Se seleciona costos de los Materiales, Equipos y Mano de Obra por cada parametro.',
			'htmlOptions'=>[
				'data'=>['name'=>'costoParametro',
					'depends'=>'costoMuestreo'
				]
			],
			'bottom'=>[
				['name'=>'Seleccionar Costos P.','value'=>['costopredeterminados-has-parametros/select'],
					'options'=>[
						'class'=>'btn btn-info modalSelect',
						'data'=>[
							'title'=>'Seccionar Costos Parámetros'
						]
					]
				],
				['name'=>'Crear Costos P.','value'=>['costopredeterminados-has-parametros/establish'],
					'options'=>[
						'class'=>'btn btn-success modalSelect',
						'data'=>[
							'title'=>'Crear Parámetros'
						]
					]
				]
			]
		])?> 
	</div>
	
<div class="row"> 
	<div class="col-sm-6 col-md-4">
		<?= Thumbnail::widget([
			'label'=>'Costo Administrativos',
			'content'=>'Se seleciona los costos administrativos',
			'htmlOptions'=>[
				'data'=>['name'=>'costoAdministrativo',
					'depends'=>'costoParametro'
				]
			],
			'bottom'=>[
				['name'=>'Seleccionar Petición','value'=>['costopredeterminados-has-administrativos/select'],
					'options'=>[
						'class'=>'btn btn-info modalSelect',
						'data'=>[
							'title'=>'Selecionar Petición'
						]
					]
				],
				['name'=>'Crear Petición','value'=>['costopredeterminados-has-administrativos/establish'],
					'options'=>[
						'class'=>'btn btn-success modalSelect',
						'data'=>[
							'title'=>'Crear Petición'
						]
					]
				]
			]
		])?> 
	</div>
	<div class="col-sm-6 col-md-4">
		<?= Thumbnail::widget([
			'label'=>'Costos',
			'content'=>'Se selecciona las variables globales que afectan los costos.',
			'htmlOptions'=>[
				'data'=>['name'=>'costo',
					'depends'=>'costoAdministrativo'
				]
			],
			'bottom'=>[
				['name'=>'Seleccionar Petición','value'=>['costos/select'],
					'options'=>[
						'class'=>'btn btn-info modalSelect',
						'data'=>[
							'title'=>'Selecionar Petición'
						]
					]
				],
				['name'=>'Crear Petición','value'=>['costos/establish'],
					'options'=>[
						'class'=>'btn btn-success modalSelect',
						'data'=>[
							'title'=>'Crear Petición'
						]
					]
				]
			]
		])?> 
	</div>
	<div class="col-sm-6 col-md-4">
		<?= Thumbnail::widget([
			'label'=>'Petición',
			'content'=>'Se guardan datos referente a la peticiones',
			'htmlOptions'=>[
				'data'=>['name'=>'peticion',
					'depends'=>'costo'
				]
			],
			'bottom'=>[
				['name'=>'Seleccionar Petición','value'=>['peticion/select'],
					'options'=>[
						'class'=>'btn btn-info modalSelect',
						'data'=>[
							'title'=>'Selecionar Petición'
						]
					]
				],
				['name'=>'Crear Petición','value'=>['peticion/establish'],
					'options'=>[
						'class'=>'btn btn-success modalSelect',
						'data'=>[
							'title'=>'Crear Petición'
						]
					]
				]
			]
		])?> 
	</div>
 </div>
