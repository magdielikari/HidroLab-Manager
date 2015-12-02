<?php

namespace backend\controllers;

use Yii;
use common\models\Costos;
use common\models\search\CostosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\forbiddenHttpException;
use yii\web\UnauthorizedHttpException;

/**
 * CostosController implements the CRUD actions for Costos model.
 */
class CostosController extends Controller
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
     * Lists all Costos models.
     * @return mixed
     */
    public function actionIndex()
    {
        if(Yii::$app->user->can('costos-index'))
        {       
            $searchModel = new CostosSearch();
            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

            return $this->render('index', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
            ]);
        } 
        else
            throw new UnauthorizedHttpException(Yii::t('app', 'You are not authorized to access this view.'));
    }

    public function actionSelect()
    {
        if(Yii::$app->user->can('costos-select'))
        {       
            $searchModel = new CostosSearch();
            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

            return $this->renderAjax('select', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
            ]);
        } 
        else
            throw new UnauthorizedHttpException(Yii::t('app', 'You are not authorized to access this view.'));
    }


    /**
     * Displays a single Costos model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        if(Yii::$app->user->can('costos-view'))
        {    
            return $this->render('view', [
                'model' => $this->findModel($id),
            ]);
        }
        else
            throw new UnauthorizedHttpException(Yii::t('app', 'You are not authorized to access this view.'));
    }

    /**
     * Creates a new Costos model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if(Yii::$app->user->can('costos-create'))
        {
            $model = new Costos();
            if ($model->load(Yii::$app->request->post())) {
                $model->save();
                return $this->redirect(['view', 'id' => $model->id]);
            } else {
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
        if(Yii::$app->user->can('costos-establish'))
        {
            $model = new Costos();
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
     * Updates an existing Costos model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        if(Yii::$app->user->can('costos-update'))
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
     * Deletes an existing Costos model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        if(Yii::$app->user->can('costos-delete'))
        {    
            $this->findModel($id)->delete();
            return $this->redirect(['index']);
        }
        else
            throw new UnauthorizedHttpException(Yii::t('app', 'You are not authorized to access this view.'));
    }

    /**
     * Finds the Costos model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Costos the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Costos::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
