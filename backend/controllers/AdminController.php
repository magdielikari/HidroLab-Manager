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

    public function actionCreatePermissions()
    {
    	$post = Yii::$app->request->post();

    	if(isset($post['permission']))
    	{
    		$auth = Yii::$app->authManager;

    		$role = $auth->createPermission($post['permission']['name']);
    		$role->description = $post['permission']['description'];

    		if($auth->add($role))
            {
                Yii::$app->session->setFlash('success', Yii::t('app', 'The item was successfully created'));

    			return $this->redirect(['index']);
            }
    	}

    	return $this->render('create-permissions');
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

    protected function getRoles()
    {
    	$roles = Yii::$app->authManager->getPermissions();

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
