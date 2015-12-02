<?php

namespace backend\controllers;

use Yii;
use common\models\GeneralHasSubtipo;
use common\models\search\GeneralHasSubtipoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\forbiddenHttpException;
use yii\web\UnauthorizedHttpException;

/**
 * GeneralHasSubtipoController implements the CRUD actions for GeneralHasSubtipo model.
 */
class GeneralHasSubtipoController extends Controller
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
     * Lists all GeneralHasSubtipo models.
     * @return mixed
     */
    public function actionIndex()
    {
        if(Yii::$app->user->can('generalHasSubtipo-index'))
        {    
            $searchModel = new GeneralHasSubtipoSearch();
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
        if(Yii::$app->user->can('generalHasSubtipo-select'))
        {    
            $searchModel = new GeneralHasSubtipoSearch();
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
     * Displays a single GeneralHasSubtipo model.
     * @param string $General_id
     * @param integer $SubTipo_id
     * @return mixed
     */
    public function actionView($General_id, $SubTipo_id)
    {
        if(Yii::$app->user->can('generalHasSubtipo-view'))
        {    
            return $this->render('view', [
                'model' => $this->findModel($General_id, $SubTipo_id),
            ]);
        }
        else
            throw new UnauthorizedHttpException(Yii::t('app', 'You are not authorized to access this view.'));
    }

    /**
     * Creates a new GeneralHasSubtipo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if(Yii::$app->user->can('generalHasSubtipo-create'))
        {    
            $model = new GeneralHasSubtipo();
            if ($model->load(Yii::$app->request->post())) {
                $model->save();
                return $this->redirect(['view', 'General_id' => $model->General_id, 'SubTipo_id' => $model->SubTipo_id]);
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
        if(Yii::$app->user->can('generalHasSubtipo-establish'))
        {    
            $model = new GeneralHasSubtipo();
            if ($model->load(Yii::$app->request->post())) {
                $model->save();
                return $this->redirect(['view', 'General_id' => $model->General_id, 'SubTipo_id' => $model->SubTipo_id]);
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
     * Updates an existing GeneralHasSubtipo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $General_id
     * @param integer $SubTipo_id
     * @return mixed
     */
    public function actionUpdate($General_id, $SubTipo_id)
    {
        if(Yii::$app->user->can('generalHasSubtipo-update'))
        {    
            $model = $this->findModel($General_id, $SubTipo_id);
            if ($model->load(Yii::$app->request->post())) {
                $model->save();
                return $this->redirect(['view', 'General_id' => $model->General_id, 'SubTipo_id' => $model->SubTipo_id]);
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
     * Deletes an existing GeneralHasSubtipo model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $General_id
     * @param integer $SubTipo_id
     * @return mixed
     */
    public function actionDelete($General_id, $SubTipo_id)
    {
        if(Yii::$app->user->can('generalHasSubtipo-delete'))
        {    
            $this->findModel($General_id, $SubTipo_id)->delete();
            return $this->redirect(['index']);
        }
        else
            throw new UnauthorizedHttpException(Yii::t('app', 'You are not authorized to access this view.'));
    }

    /**
     * Finds the GeneralHasSubtipo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $General_id
     * @param integer $SubTipo_id
     * @return GeneralHasSubtipo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($General_id, $SubTipo_id)
    {
        if (($model = GeneralHasSubtipo::findOne(['General_id' => $General_id, 'SubTipo_id' => $SubTipo_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
