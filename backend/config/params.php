<?php
use rmrevin\yii\fontawesome\FA;
return [
    'adminEmail' => 'admin@example.com',
    'menuRoutes'=>[
		['label'=>FA::icon('gavel'), 'items'=>[
			['label'=>'departamento', 'url'=>['/departamento/index']],
			['label'=>'departamento-has-decreto', 'url'=>['/departamento-has-decreto/index']],
			['label'=>'decreto', 'url'=>['/decreto/index']],
			['label'=>'decreto-has-tipo', 'url'=>['/decreto-has-tipo/index']],
			['label'=>'tipo', 'url'=>['/tipo/index']],
			['label'=>'tipo-has-subtipo', 'url'=>['/tipo-has-subtipo/index']],
			['label'=>'subtipo', 'url'=>['/subtipo/index']],
			['label'=>'limites', 'url'=>['/limites/index']],
			['label'=>'caracterizacion', 'url'=>['/caracterizacion/index']],
			['label'=>'caracterizacion-has-departamento', 'url'=>['/caracterizacion-has-departamento/index']],
			['label'=>'rama', 'url'=>['/rama/index']],
			['label'=>'rama-has-caracterizacion', 'url'=>['/rama-has-caracterizacion/index']],
		]],
		['label'=>FA::icon('users'), 'items'=>[
			['label'=>'clientes', 'url'=>['/clientes/index']],
			['label'=>'carea', 'url'=>['/carea/index']],
			['label'=>'celular', 'url'=>['/celular/index']],
			['label'=>'puesto', 'url'=>['/puesto/index']],
			['label'=>'vendedor', 'url'=>['/vendedor/index']],
			['label'=>'user', 'url'=>['/user/index']],
		]],
		['label'=>'<i class="glyphicon glyphicon-usd"></i>', 'items'=>[
			['label'=>'equipos', 'url'=>['/equipos/index']],
			['label'=>'caracterizacion-has-equipos', 'url'=>['/caracterizacion-has-equipos/index']],
			['label'=>'costoPredeterminados', 'url'=>['/costopredeterminados/index']],
			['label'=>'ordenCompra', 'url'=>['/ordencompra/index']],
		]],
		['label'=>'<i class="glyphicon glyphicon-inbox"></i>', 'items'=>[
			['label'=>'peticion', 'url'=>['/peticion/index']],
			['label'=>'costopredeterminados-has-administrativos', 'url'=>['/costopredeterminados-has-administrativos/index']],
			['label'=>'costopredeterminados-has-parametros', 'url'=>['/costopredeterminados-has-parametros/index']],
			['label'=>'costopredeterminados-has-prestaciones', 'url'=>['/costopredeterminados-has-prestaciones/index']],
			['label'=>'muestras', 'url'=>['/muestras/index']],
			['label'=>'equipos-has-general', 'url'=>['/equipos-has-general/index']],
			['label'=>'parametros-has-muestras-has-costopredeterminados', 'url'=>['/parametros-has-muestras-has-costopredeterminados/index']],
			['label'=>'parametros-has-muestras', 'url'=>['/parametros-has-muestras/index']],
			['label'=>'rama-has-general', 'url'=>['/rama-has-general/index']],
			['label'=>'general-has-tipo', 'url'=>['/general-has-tipo/index']],
			['label'=>'general-has-subtipo', 'url'=>['/general-has-subtipo/index']],
			['label'=>'general', 'url'=>['/general/index']],
			['label'=>'reporte', 'url'=>['/reporte/index']],
		]],
		['label'=>'<i class="glyphicon glyphicon-wrench"></i>', 'items'=>[
			['label'=>'dialaborable', 'url'=>['/dialaborables/index']],
			['label'=>'referencia', 'url'=>['/referencia/index']],
			['label'=>'plantilla', 'url'=>['/plantilla/index']],
		]]
	]
];
