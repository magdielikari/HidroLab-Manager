<?php

namespace backend\controllers;

use Yii;
use common\models\Parametros;
use common\models\search\ParametrosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\forbiddenHttpException;
use yii\web\UnauthorizedHttpException;
use yii\helpers\Json;
use yii\web\Response;

/**
 * ParametrosController implements the CRUD actions for Parametros model.
 */
class ParametrosController extends Controller
{
	public function behaviors()
	{
		return [
			'verbs' => [
				'class' => VerbFilter::className(),
				'actions' => [
					'delete' => ['post'],
				],
			],
		];
	}

	/**
	 * Lists all Parametros models.
	 * @return mixed
	 */
	public function actionIndex()
	{
		if(Yii::$app->user->can('parametros-index'))
		{    
			$searchModel = new ParametrosSearch();
			$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
			return $this->render('index', [
				'searchModel' => $searchModel,
				'dataProvider' => $dataProvider,
			]);
		}
	}

	public function actionSelect()
	{
		if(Yii::$app->user->can('parametros-select'))
		{    
			$searchModel = new ParametrosSearch();
			$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
			return $this->renderAjax('select', [
				'searchModel' => $searchModel,
				'dataProvider' => $dataProvider,
			]);
		}
	}
	/**
	 * Displays a single Parametros model.
	 * @param string $id
	 * @return mixed
	 */
	public function actionView($id)
	{
		if(Yii::$app->user->can('parametros-view'))
		{    
			return $this->render('view', [
				'model' => $this->findModel($id),
			]);
		}
		else
			throw new UnauthorizedHttpException(Yii::t('app', 'You are not authorized to access this view.'));
	}

	/**
	 * Creates a new Parametros model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 * @return mixed
	 */
	public function actionCreate()
	{
		if(Yii::$app->user->can('parametros-create'))
		{    
			if(Yii::$app->request->isAjax)
			{
				$result = [
					'data'=>[],
					'errors'=>[]
				];

				$post = Yii::$app->request->post();

				foreach($post['parametros'] as $data)
				{
					$model = new Parametros();

					if($model->load(['Parametros'=>$data]) && $model->save())
						$result['data'][] = $model->attributes;

					else
					{
						$result['errors'] = $model->getErrors();
						break;
					}
				}
				
				Yii::$app->response->format = Response::FORMAT_JSON;

				echo Json::encode($result);
			}
			
			if(!Yii::$app->request->isAjax)
			{
				$model = new Parametros();
				
				if ($model->load(Yii::$app->request->post()))
				{
					$model->save();

					if(Yii::$app->request->isAjax)
					return $this->redirect(['view', 'id' => $model->id]);
				}
			}
			
			else {
				return $this->renderAjax('create', [
					'model' => $model,
				]);
			}
		}
		else
			throw new UnauthorizedHttpException(Yii::t('app', 'You are not authorized to access this view.'));
	}

	public function actionEstablish()
	{
		if(Yii::$app->user->can('parametros-establish'))
		{    
			$model = new Parametros();
			if ($model->load(Yii::$app->request->post())) {
				$model->save();
				return $this->redirect(['view', 'id' => $model->id]);
			} else {
				return $this->renderAjax('establish', [
					'model' => $model,
				]);
			}
		}
		else
			throw new UnauthorizedHttpException(Yii::t('app', 'You are not authorized to access this view.'));
	}

	/**
	 * Updates an existing Parametros model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param string $id
	 * @return mixed
	 */
	public function actionUpdate($id)
	{   
		if(Yii::$app->user->can('parametros-update'))
		{    
			$model = $this->findModel($id);
			if ($model->load(Yii::$app->request->post())) {
				$model->save();
				return $this->redirect(['view', 'id' => $model->id]);
			} else {
				return $this->renderAjax('update', [
					'model' => $model,
				]);
			}
		}
		else
			throw new UnauthorizedHttpException(Yii::t('app', 'You are not authorized to access this view.'));
	}

	/**
	 * Deletes an existing Parametros model.
	 * If deletion is successful, the browser will be redirected to the 'index' page.
	 * @param string $id
	 * @return mixed
	 */
	public function actionDelete($id)
	{   
		if(Yii::$app->user->can('parametros-delete'))
		{
			$this->findModel($id)->delete();
			return $this->redirect(['index']);           
		}
		else
			throw new UnauthorizedHttpException(Yii::t('app', 'You are not authorized to access this view.'));
	}

	/**
	 * Finds the Parametros model based on its primary key value.
	 * If the model is not found, a 404 HTTP exception will be thrown.
	 * @param string $id
	 * @return Parametros the loaded model
	 * @throws NotFoundHttpException if the model cannot be found
	 */
	protected function findModel($id)
	{
		if (($model = Parametros::findOne($id)) !== null) {
			return $model;
		} else {
			throw new NotFoundHttpException('The requested page does not exist.');
		}
	}
}
