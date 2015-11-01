<?php
return [
    'adminEmail' => 'admin@example.com',
    'menuRoutes'=>[
		['label'=>'Leyes', 'items'=>[
			['label'=>'departamento', 'url'=>['departamento/index']],
			['label'=>'departamento-has-decreto', 'url'=>['departamento-has-decreto/index']],
			['label'=>'decreto', 'url'=>['decreto/index']],
			['label'=>'tipo', 'url'=>['tipo/index']],
			['label'=>'tipo-has-subtipo', 'url'=>['tipo-has-subtipo/index']],
			['label'=>'subtipo', 'url'=>['subtipo/index']],
			['label'=>'caracterizacion', 'url'=>['caracterizacion/index']],
			['label'=>'limites', 'url'=>['limites/index']],
			['label'=>'rama', 'url'=>['rama/index']],
			['label'=>'rama-has-caracterizacion', 'url'=>['rama-has-caracterizacion/index']],
			['label'=>'caracterizacion-has-departamento', 'url'=>['caracterizacion-has-departamento/index']],
		]],
		['label'=>'Personas', 'items'=>[
			['label'=>'clientes', 'url'=>['clientes/index']],
			['label'=>'carea', 'url'=>['carea/index']],
			['label'=>'celular', 'url'=>['celular/index']],
			['label'=>'puesto', 'url'=>['puesto/index']],
			['label'=>'vendedor', 'url'=>['vendedor/index']],
			['label'=>'user', 'url'=>['user/index']],
		]],
		['label'=>'Finanzas', 'items'=>[
			['label'=>'equipos', 'url'=>['equipos/index']],
			['label'=>'caracterizaciones-has-equipos', 'url'=>['caracterizaciones-has-equipos/index']],
			['label'=>'costoPredeterminados', 'url'=>['costo-predeterminados/index']],
			['label'=>'ordenCompra', 'url'=>['orden-compra/index']],
		]],
		['label'=>'Peticion', 'items'=>[
			['label'=>'peticion', 'url'=>['peticion/index']],
			['label'=>'costopredeterminados-has-costomuestra', 'url'=>['costopredeterminados-has-costomuestra/index']],
			['label'=>'costopredeterminados-has-costoparametro', 'url'=>['costopredeterminados-has-costoparametro/index']],
			['label'=>'muestras', 'url'=>['muestras/index']],
			['label'=>'parametros-has-muestra', 'url'=>['parametros-has-muestra/index']],
			['label'=>'equipos-has-general', 'url'=>['equipos-has-general/index']],
			['label'=>'costo-parametro', 'url'=>['costo-parametro/index']],
			['label'=>'costo-muestra', 'url'=>['costo-muestra/index']],
			['label'=>'rama-has-general', 'url'=>['rama-has-general/index']],
			['label'=>'general-has-tipo', 'url'=>['general-has-tipo/index']],
			['label'=>'general-has-subtipo', 'url'=>['general-has-subtipo/index']],
			['label'=>'general', 'url'=>['general/index']],
			['label'=>'reporte', 'url'=>['reporte/index']],
		]],
		['label'=>'Herramientas', 'items'=>[
			['label'=>'dia-laborable', 'url'=>['dia-laborable/index']],
			['label'=>'referencia', 'url'=>['referencia/index']],
			['label'=>'plantilla', 'url'=>['plantilla/index']],
		]]
	]
];
