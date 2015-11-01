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

	public function actionCreate()
	{
		$post = Yii::$app->request->post();

    	if(isset($post['permission']))
    	{
    		$auth = Yii::$app->authManager;

    		$permission = $auth->createPermission($post['permission']['name']);
    		$permission->description = $post['permission']['description'];

    		if($auth->add($permission))
            {
                Yii::$app->session->setFlash('success', Yii::t('app', 'The was successfully created'));

    			return $this->redirect(['index']);
            }

            Yii::$app->session->setFlash('error', Yii::t('app', 'There was an error creating the item'));
    	}

    	return $this->render('create');
	}

	protected function getPermissions()
    {
    	$permissions = Yii::$app->authManager->getPermissions();

    	$provider = new ArrayDataProvider([
    		'models'=>$permissions,
    		'pagination'=>[
    			'pageSize'=>10,
    		]
    	]);

    	return $provider;
    }
}