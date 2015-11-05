<?php

namespace backend\controllers;

use Yii;
use yii\data\ArrayDataProvider;
use yii\web\Controller;

class AdminController extends Controller
{
    public function actionIndex()
    {
    	$dataProvider = $this->getPermissions();

        return $this->render('index', ['dataProvider'=>$dataProvider]);
    }

    /**
     * [actionCreatePermissions Crear un permiso a la base de datos]
     */
    public function actionCreatePermissions()
    {
    	$post = Yii::$app->request->post();

    	if(isset($post['permission']))
    	{
    		$auth = Yii::$app->authManager;

    		$permission = $auth->createPermission($post['permission']['name']);
    		$permission->description = $post['permission']['description'];

    		if($auth->add($permission))
            {
                Yii::$app->session->setFlash('success', Yii::t('app', 'The item was successfully created'));

    			return $this->redirect(['index']);
            }
    	}

    	return $this->render('create-permissions');
    }

    public function actionCreateRole()
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

        return $this->render('create-role');
    }

    /**
     * [actionDelete Eliminar un permiso en la base de la base de datos]
     * @param  [string] $name Nombre del permiso
     */
    public function actionDelete($name)
    {
        $auth = Yii::$app->authManager;
        $permission = $auth->getPermission($name);

        /**
         * Si no existe permiso entonces agregar un flash de error y regresar a index
         */
        if(!$auth->remove($permission))
            Yii::$app->session->setFlash('error', Yii::t('app', 'The selected item does not exist'));

        else
            Yii::$app->session->setFlash('success', Yii::t('app', 'The selected item was successfully deleted'));

        return $this->redirect(['index']);
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

    protected function mapKeys($array)
    {
        $arr = [];
        foreach ($array as $key => $value)
                $arr[$key] = $key;

        return $arr;
    }
}
