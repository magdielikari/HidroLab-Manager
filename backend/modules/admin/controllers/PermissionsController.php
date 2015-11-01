<?php

namespace backend\modules\admin\controllers;

use yii;
use yii\web\Controller;
use yii\data\ArrayDataProvider;

Class PermissionsController extends Controller
{
	public function actionIndex()
	{
		$dataProvider = $this->getPermissions();

        return $this->render('index', ['dataProvider'=>$dataProvider]);
	}

	protected function getPermissions()
    {
    	$roles = Yii::$app->authManager->getPermissions();

    	$provider = new ArrayDataProvider([
    		'models'=>$roles,
    		'pagination'=>[
    			'pageSize'=>10,
    		]
    	]);

    	return $provider;
    }
}