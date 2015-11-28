<?php

namespace backend\controllers;

use Yii;
use common\models\DepartamentoHasDecreto;
use common\models\search\DepartamentoHasDecretoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\forbiddenHttpException;
use yii\web\UnauthorizedHttpException;

/**
 * DepartamentoHasDecretoController implements the CRUD actions for DepartamentoHasDecreto model.
 */
class DepartamentoHasDecretoController extends Controller
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
     * Lists all DepartamentoHasDecreto models.
     * @return mixed
     */
    public function actionIndex()
    {
        if(Yii::$app->user->can('departamentoHasDecreto-index'))
        {    
            $searchModel = new DepartamentoHasDecretoSearch();
            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
            return $this->render('index', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
            ]);
        }
        else
            throw new UnauthorizedHttpException(Yii::t('app', 'You are not authorized to access this view.'));
    }

    /**
     * Displays a single DepartamentoHasDecreto model.
     * @param integer $Departamento_id
     * @param integer $Decreto_id
     * @return mixed
     */
    public function actionView($Departamento_id, $Decreto_id)
    {
        if(Yii::$app->user->can('departamentoHasDecreto-view'))
        {    
            return $this->render('view', [
                'model' => $this->findModel($Departamento_id, $Decreto_id),
            ]);
        }
        else
            throw new UnauthorizedHttpException(Yii::t('app', 'You are not authorized to access this view.'));
    }

    /**
     * Creates a new DepartamentoHasDecreto model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if(Yii::$app->user->can('departamentoHasDecreto-create'))
        {    
            $model = new DepartamentoHasDecreto();
            if ($model->load(Yii::$app->request->post())) {
                $model->save();
                return $this->redirect(['view', 'Departamento_id' => $model->Departamento_id, 'Decreto_id' => $model->Decreto_id]);
            } else {
                return $this->renderAjax('create', [
                    'model' => $model,
                ]);
            }
        }
        else
            throw new UnauthorizedHttpException(Yii::t('app', 'You are not authorized to access this view.'));
    }

    /**
     * Updates an existing DepartamentoHasDecreto model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $Departamento_id
     * @param integer $Decreto_id
     * @return mixed
     */
    public function actionUpdate($Departamento_id, $Decreto_id)
    {
        if(Yii::$app->user->can('departamentoHasDecreto-update'))
        {    
            $model = $this->findModel($Departamento_id, $Decreto_id);
            if ($model->load(Yii::$app->request->post())) {
                $model->save();
                return $this->redirect(['view', 'Departamento_id' => $model->Departamento_id, 'Decreto_id' => $model->Decreto_id]);
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
     * Deletes an existing DepartamentoHasDecreto model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $Departamento_id
     * @param integer $Decreto_id
     * @return mixed
     */
    public function actionDelete($Departamento_id, $Decreto_id)
    {
        if(Yii::$app->user->can('departamentoHasDecreto-delete'))
        {    
            $this->findModel($Departamento_id, $Decreto_id)->delete();
            return $this->redirect(['index']);
        }
        else
            throw new UnauthorizedHttpException(Yii::t('app', 'You are not authorized to access this view.'));
    }

    /**
     * Finds the DepartamentoHasDecreto model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $Departamento_id
     * @param integer $Decreto_id
     * @return DepartamentoHasDecreto the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Departamento_id, $Decreto_id)
    {
        if (($model = DepartamentoHasDecreto::findOne(['Departamento_id' => $Departamento_id, 'Decreto_id' => $Decreto_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
