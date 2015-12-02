<?php

namespace backend\controllers;

use Yii;
use common\models\Muestras;
use common\models\search\MuestrasSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\forbiddenHttpException;
use yii\web\UnauthorizedHttpException;

/**
 * MuestrasController implements the CRUD actions for Muestras model.
 */
class MuestrasController extends Controller
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
     * Lists all Muestras models.
     * @return mixed
     */
    public function actionIndex()
    {
        if(Yii::$app->user->can('muestras-index'))
        {    
            $searchModel = new MuestrasSearch();
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
        if(Yii::$app->user->can('muestras-select'))
        {    
            $searchModel = new MuestrasSearch();
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
     * Displays a single Muestras model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        if(Yii::$app->user->can('muestras-view'))
        {    
            return $this->render('view', [
                'model' => $this->findModel($id),
            ]);
        }
        else
            throw new UnauthorizedHttpException(Yii::t('app', 'You are not authorized to access this view.'));
    }

    /**
     * Creates a new Muestras model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if(Yii::$app->user->can('muestras-create'))
        {    
            $model = new Muestras();
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
        if(Yii::$app->user->can('muestras-establish'))
        {    
            $model = new Muestras();
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
     * Updates an existing Muestras model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        if(Yii::$app->user->can('muestras-update'))
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
     * Deletes an existing Muestras model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        if(Yii::$app->user->can('muestras-delete'))
        {    
            $this->findModel($id)->delete();
            return $this->redirect(['index']);
        }
        else
            throw new UnauthorizedHttpException(Yii::t('app', 'You are not authorized to access this view.'));
    }

    /**
     * Finds the Muestras model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Muestras the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Muestras::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
