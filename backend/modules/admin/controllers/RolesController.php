<?php

namespace backend\modules\admin\controllers;

use yii;
use yii\web\Controller;
use yii\data\ArrayDataProvider;

use backend\modules\admin\controllers\PermissionsController;

Class RolesController extends Controller
{
	public function actionIndex()
	{
		$dataProvider = $this->getDataRoles();

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

	/**
	 * [actionView View the role and all it's assignations]
	 * @param  [string] $name [The name of the role]
	 */
	public function actionView($name)
	{
		$role = Yii::$app->authManager->getRole($name);

		$permissions = $this->getDataChildren($name);

		return $this->render('view', ['role'=>$role, 'dataProvider'=>$permissions]);
	}

	/**
	 * [actionCreate Create a new role]
	 */
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

	/**
	 * [actionRemove Remove a permission to a role]
	 * @param  [string] $name [The name of the permission]
	 * @param  [string] $role [The name of the role]
	 */
	public function actionRemove($name, $role)
	{
		if(Yii::$app->request->isPost)
		{
			$auth = Yii::$app->authManager;

			$parent = $auth->getRole($role);
			$child = $auth->getPermission($name);

			if($auth->removeChild($parent, $child))
				Yii::$app->session->setFlash('success', Yii::t('app', 'The assignation was removed successfully'));
		}

		else
			Yii::$app->session->setFlash('error', Yii::t('app', 'There was an error removing the assignation'));

		return $this->redirect(['view', 'name'=>$role]);
	}

	/**
	 * [getDataRoles Create a role dataProvider]
	 * @return [object] [The dataProvider]
	 */
	protected function getDataRoles()
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

	/**
	 * [getRoles Get all the existing roles]
	 * @return [array] [All roles]
	 */
	protected function getRoles()
	{
		$auth = Yii::$app->authManager;

		return $auth->getRoles();
	}

	/**
	 * [getChildren Get all the permissions assigned to a role]
	 * @param  [string] $parent [the name of the role]
	 * @return  [array] 		[All the permissions from a role]
	 */
	protected function getChildren($parent)
	{
		$auth = Yii::$app->authManager;

		return $auth->getChildren($parent);
	}

	/**
	 * [getDataChildren Create a dataProvider for all the permissions assigned to a role]
	 * @param  [string] $parent [The name of the role]
	 * @return [object]         [The dataProvider of permissions from a role]
	 */
	protected function getDataChildren($parent)
	{
		$auth = Yii::$app->authManager;

		$children = $this->getChildren($parent);

		$dataProvider = new ArrayDataProvider([
			'models'=>$children,
			'pagination'=>[
				'pageSize'=>10
			]
		]);

		return $dataProvider;
	}
}