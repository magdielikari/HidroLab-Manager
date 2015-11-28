<?php

namespace backend\controllers;

use Yii;
use common\models\GeneralHasTipo;
use common\models\search\GeneralHasTipoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\forbiddenHttpException;
use yii\web\UnauthorizedHttpException;

/**
 * GeneralHasTipoController implements the CRUD actions for GeneralHasTipo model.
 */
class GeneralHasTipoController extends Controller
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
     * Lists all GeneralHasTipo models.
     * @return mixed
     */
    public function actionIndex()
    {
        if(Yii::$app->user->can('generalHasTipo-index'))
        {
            $searchModel = new GeneralHasTipoSearch();
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
        if(Yii::$app->user->can('generalHasTipo-select'))
        {
            $searchModel = new GeneralHasTipoSearch();
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
     * Displays a single GeneralHasTipo model.
     * @param string $General_id
     * @param integer $Tipo_id
     * @return mixed
     */
    public function actionView($General_id, $Tipo_id)
    {
        if(Yii::$app->user->can('generalHasTipo-view'))
        {    
            return $this->render('view', [
                'model' => $this->findModel($General_id, $Tipo_id),
            ]);
        }
        else
            throw new UnauthorizedHttpException(Yii::t('app', 'You are not authorized to access this view.'));
    }

    /**
     * Creates a new GeneralHasTipo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if(Yii::$app->user->can('generalHasTipo-create'))
        {    
            $model = new GeneralHasTipo();
            if ($model->load(Yii::$app->request->post())) {
                $model->save();
                return $this->redirect(['view', 'General_id' => $model->General_id, 'Tipo_id' => $model->Tipo_id]);
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
        if(Yii::$app->user->can('generalHasTipo-establish'))
        {    
            $model = new GeneralHasTipo();
            if ($model->load(Yii::$app->request->post())) {
                $model->save();
                return $this->redirect(['view', 'General_id' => $model->General_id, 'Tipo_id' => $model->Tipo_id]);
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
     * Updates an existing GeneralHasTipo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $General_id
     * @param integer $Tipo_id
     * @return mixed
     */
    public function actionUpdate($General_id, $Tipo_id)
    {
        if(Yii::$app->user->can('generalHasTipo-update'))
        {    
            $model = $this->findModel($General_id, $Tipo_id);
            if ($model->load(Yii::$app->request->post())) {
                $model->save();
                return $this->redirect(['view', 'General_id' => $model->General_id, 'Tipo_id' => $model->Tipo_id]);
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
     * Deletes an existing GeneralHasTipo model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $General_id
     * @param integer $Tipo_id
     * @return mixed
     */
    public function actionDelete($General_id, $Tipo_id)
    {
        if(Yii::$app->user->can('generalHasTipo-delete'))
        {    
            $this->findModel($General_id, $Tipo_id)->delete();
            return $this->redirect(['index']);
        }
        else
            throw new UnauthorizedHttpException(Yii::t('app', 'You are not authorized to access this view.'));
    }

    /**
     * Finds the GeneralHasTipo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $General_id
     * @param integer $Tipo_id
     * @return GeneralHasTipo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($General_id, $Tipo_id)
    {
        if (($model = GeneralHasTipo::findOne(['General_id' => $General_id, 'Tipo_id' => $Tipo_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
