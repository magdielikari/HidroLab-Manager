<?php

namespace backend\controllers;

use Yii;
use common\models\RamaHasGeneral;
use common\models\search\RamaHasGeneralSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\forbiddenHttpException;
use yii\web\UnauthorizedHttpException;

/**
 * RamaHasGeneralController implements the CRUD actions for RamaHasGeneral model.
 */
class RamaHasGeneralController extends Controller
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
     * Lists all RamaHasGeneral models.
     * @return mixed
     */
    public function actionIndex()
    {
        if(Yii::$app->user->can('ramaHasGeneral-index'))
        {
            $searchModel = new RamaHasGeneralSearch();
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
        if(Yii::$app->user->can('ramaHasGeneral-select'))
        {
            $searchModel = new RamaHasGeneralSearch();
            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
            return $this->render('select', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
            ]);
        }
        else
            throw new UnauthorizedHttpException(Yii::t('app', 'You are not authorized to access this view.'));
    }

    /**
     * Displays a single RamaHasGeneral model.
     * @param string $Rama_id
     * @param string $General_id
     * @return mixed
     */
    public function actionView($Rama_id, $General_id)
    {
        if(Yii::$app->user->can('ramaHasGeneral-view'))
        {    
            return $this->render('view', [
                'model' => $this->findModel($Rama_id, $General_id),
            ]);
        }
        else
            throw new UnauthorizedHttpException(Yii::t('app', 'You are not authorized to access this view.'));
    }

    /**
     * Creates a new RamaHasGeneral model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if(Yii::$app->user->can('ramaHasGeneral-create'))
        {    
            $model = new RamaHasGeneral();
            if ($model->load(Yii::$app->request->post())) {
                $model->save();
                return $this->redirect(['view', 'Rama_id' => $model->Rama_id, 'General_id' => $model->General_id]);
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
        if(Yii::$app->user->can('ramaHasGeneral-establish'))
        {    
            $model = new RamaHasGeneral();
            if ($model->load(Yii::$app->request->post())) {
                $model->save();
                return $this->redirect(['view', 'Rama_id' => $model->Rama_id, 'General_id' => $model->General_id]);
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
     * Updates an existing RamaHasGeneral model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $Rama_id
     * @param string $General_id
     * @return mixed
     */
    public function actionUpdate($Rama_id, $General_id)
    {
        if(Yii::$app->user->can('ramaHasGeneral-update'))
        {    
            $model = $this->findModel($Rama_id, $General_id);
            if ($model->load(Yii::$app->request->post())) {
                $model->save();
                return $this->redirect(['view', 'Rama_id' => $model->Rama_id, 'General_id' => $model->General_id]);
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
     * Deletes an existing RamaHasGeneral model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $Rama_id
     * @param string $General_id
     * @return mixed
     */
    public function actionDelete($Rama_id, $General_id)
    {
        if(Yii::$app->user->can('ramaHasGeneral-delete'))
        {    
            $this->findModel($Rama_id, $General_id)->delete();
            return $this->redirect(['index']);
        }
        else
            throw new UnauthorizedHttpException(Yii::t('app', 'You are not authorized to access this view.'));        
    }

    /**
     * Finds the RamaHasGeneral model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $Rama_id
     * @param string $General_id
     * @return RamaHasGeneral the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Rama_id, $General_id)
    {
        if (($model = RamaHasGeneral::findOne(['Rama_id' => $Rama_id, 'General_id' => $General_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
