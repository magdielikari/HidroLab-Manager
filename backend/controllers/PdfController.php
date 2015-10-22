<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;

Class PdfController extends Controller
{
	public function actionIndex()
	{
		Yii::$app->response->format = 'pdf';

		$this->layout = '/print';

		return $this->render('index', []);
	}
}
?>