<?php

namespace backend\modules\admin\controllers;

use yii;
use yii\web\Controller;
use yii\data\ArrayDataProvider;

Class PermissionsController extends Controller
{
	public function actionIndex()
	{
		$dataProvider = $this->getDataPermissions();

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

	public function getDataPermissions()
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