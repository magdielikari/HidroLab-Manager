<?php

namespace backend\modules\admin\controllers;

use yii;
use yii\web\Controller;
use yii\data\ArrayDataProvider;

Class RolesController extends Controller
{
	public function actionIndex()
	{
		$dataProvider = $this->getRoles();

		return $this->render('index', ['dataProvider'=>$dataProvider]);
	}

	public function actionCreate()
	{
		$auth = Yii::$app->authManager;
        $post = Yii::$app->request->post();

        if(isset($post['role']))
        {
            $role = $auth->createRole($post['role']['name']);
            $role->description = $post['role']['description'];

            if($auth->add($role))
                Yii::$app->session->setFlash('success', Yii::t('app', 'The permissions were assigned successfully'));

            else
                Yii::$app->session->setFlash('error', Yii::t('app', 'There was an error creating the role'));
        }

        return $this->render('create');
	}

	protected function getRoles()
	{
		$roles = Yii::$app->authManager->getRoles();

		$dataProvider = new ArrayDataProvider([
			'models'=>$roles,
			'pagination'=>[
				'pageSize'=>10
			]
		]);

		return $dataProvider;
	}
}