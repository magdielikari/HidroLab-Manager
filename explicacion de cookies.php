<?php
// Cookies
// Ignora las funciones anonymas, solo lo hago para encapsular y diferenciar metodos de los otros metodos
// Las cookies funcionan tanto en requests normales y requests de AJAX

/*
*	Como crear una cookie
*/
function()
{
	// Obtener el objeto de cookies
	// Como el server es el que va a crear la cookie, esto debe estar en el response, por el simple hecho que la respuesta del servidor agregara nueva data en el header
	// Sin enbargo crear una variable $cookie no es del todo necesario, todo el codigo puede ser en una sola linea;
	$cookie = Yii::$app->response->cookies;

	// la funcion @add solo acepta un parametro y es la estancia Cookie
	// Cookie acepta un parametro lo cual es el array... Este array debe tener las propiedades de Cookie, Se puede conseguir en el api yii\web\Cookie
	// Como cookie es un objeto clase, se debe agregar el "use yii\web\Cookie"
	$cookies->add(new \yii\web\Cookie([
		'name'=>'test',
		'value'=>'value'
	]));
}

/*
*	Como leer una cookie
*/
function()
{
	// Obtener el objeto de cookies
	// Como las cookies son guardadas en el browser y cada request envia el header con las cookies, y como es un request, entonces se accede desde el request
	// Cookies es un array objeto, y como es un array, se puede acceder usando [] en la expresion
	// Las funciones del objeto cookie se puede conseguir en el api yii\web\CookieCollection
	$cookies = Yii::$app->request->cookies;

	// Para obtener una cookie usando las funciones del objeto
	$cookies->get('test'); //test es el nombre de la cookie y retorna un objeto en respuesta

	// Como cookie es un array.. Una alternativa de leer la cookie seria de esta manera
	$cookies['test']; //Esto sigue retornando el mismo valor del metodo anterior

	// Como los metodos de obtener la cookie retornan un objeto, para obtener el valor como string, o array, dependiendo del valor que tenga, se usa la propiedad "value"
	$cookies->get('test')->value;
	$cookies['test']->value;
}

/*
*	Como destruir una cookie
*/
function()
{
	// Se obtiene el objeto de cookies de la misma manera como se crea
	// Esto es controlado por el server, y por lo tanto esto se hace a travez del response
	$cookie = Yii::$app->response->cookies;

	// hay 2 maneras simples de borrar una cookie
	// En este caso utilizaremos como ejemplo una cookie que se llame "test"

	// Metodo de borrar cookie usando el metodo del objeto Cookie
	$cookie->remove('test'); 

	// Metodo de borrar cookie usando funciones de PHP
	unset($cookie['test']);

	// No hay diferencia en el resultado de ambas maneras
	// Para explicar un poco el metodo de PHP, como una cookie es un objeto array, por ser simplemente un array tambien, se usa la funcion "unset()" lo cual borra una variable en PHP
}
?>