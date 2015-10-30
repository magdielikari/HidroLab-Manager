<?php

namespace backend\controllers;

use Yii;
use yii\data\ArrayDataProvider;
use yii\web\Controller;

class AdminController extends Controller
{
    public function actionIndex()
    {
    	$dataProvider = $this->getRoles();

        return $this->render('index', ['dataProvider'=>$dataProvider]);
    }

    public function actionCreate()
    {
    	$post = Yii::$app->request->post();

    	if(isset($post['role']))
    	{
    		$auth = Yii::$app->authManager;

    		$role = $auth->createRole($post['role']['name']);
    		$role->description = $post['role']['description'];

    		if($auth->add($role))
    			return $this->redirect(['index']);
    	}

    	return $this->render('create');
    }

    protected function getRoles()
    {
    	$roles = Yii::$app->authManager->getRoles();

    	$provider = new ArrayDataProvider([
    		'models'=>$roles,
    		'pagination'=>[
    			'pageSize'=>10,
    		],
    		'sort'=>[
    			'attributes'=>['name', 'description']
    		]
    	]);

    	return $provider;
    }
}
