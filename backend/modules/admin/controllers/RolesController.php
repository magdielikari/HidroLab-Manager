<?php

namespace backend\modules\admin\controllers;

use yii;
use yii\web\Controller;
use yii\data\ArrayDataProvider;

Class RolesController extends Controller
{
	public function actionIndex()
	{
		$dataProvider = $this->dataRoles();

		return $this->render('index', ['dataProvider'=>$dataProvider]);
	}

	/**
	 * [actionAssign Assign permisions to a role]
	 */
	public function actionAssign()
	{
		$auth = Yii::$app->authManager;
		$roles = $this->getRoles();
		$permissions = $auth->getPermissions();
		$post = Yii::$app->request->post();

		if(isset($post['assign']))
		{
			$roleItem = $auth->getRole($post['assign']['role']);

			try
			{
				foreach($post['assign']['permission'] as $permission)
				{
					$permissionItem = $auth->getPermission($permission);

					$auth->addChild($roleItem, $permissionItem);
				}

				Yii::$app->session->setFlash('success', Yii::t('app', 'The permissions were assigned successfully'));
			}

			/**
			 * Obtener el error usando la clase \Exception ya que todas las exceptions de yii provienen de esta exception
			 */
			catch(\Exception $e)
			{
				if($e->getCode() == 23000)
					Yii::$app->session->setFlash('error', 'The item already exist');

				else
					Yii::$app->session->setFlash('error', 'There was an error caught');
			}
		}

		return $this->render('assign', ['roles'=>$roles, 'permissions'=>$permissions]);
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

	protected function dataRoles()
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

	protected function getRoles()
	{
		$auth = Yii::$app->authManager;

		return $auth->getRoles();
	}
}