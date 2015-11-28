<?php

namespace backend\controllers;

use Yii;
use common\models\CaracterizacionHasDepartamento;
use common\models\search\CaracterizacionHasDepartamentoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\forbiddenHttpException;
use yii\web\UnauthorizedHttpException;

/**
 * CaracterizacionHasDepartamentoController implements the CRUD actions for CaracterizacionHasDepartamento model.
 */
class CaracterizacionHasDepartamentoController extends Controller
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
     * Lists all CaracterizacionHasDepartamento models.
     * @return mixed
     */
    public function actionIndex()
    {
        if(Yii::$app->user->can('caracterizacionHasDepartamento-index'))
        {    
            $searchModel = new CaracterizacionHasDepartamentoSearch();
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
     * Displays a single CaracterizacionHasDepartamento model.
     * @param integer $Caracterizacion_id
     * @param integer $Departamento_id
     * @return mixed
     */
    public function actionView($Caracterizacion_id, $Departamento_id)
    {
        if(Yii::$app->user->can('caracterizacionHasDepartamento-view'))
        {   
            return $this->render('view', [
                'model' => $this->findModel($Caracterizacion_id, $Departamento_id),
            ]);
        }
        else
            throw new UnauthorizedHttpException(Yii::t('app', 'You are not authorized to access this view.'));
    }

    /**
     * Creates a new CaracterizacionHasDepartamento model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if(Yii::$app->user->can('caracterizacionHasDepartamento-create'))
        {    
            $model = new CaracterizacionHasDepartamento();
            if ($model->load(Yii::$app->request->post())) {
                $model->save();
                return $this->redirect(['view', 'Caracterizacion_id' => $model->Caracterizacion_id, 'Departamento_id' => $model->Departamento_id]);
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
     * Updates an existing CaracterizacionHasDepartamento model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $Caracterizacion_id
     * @param integer $Departamento_id
     * @return mixed
     */
    public function actionUpdate($Caracterizacion_id, $Departamento_id)
    {
        if(Yii::$app->user->can('caracterizacionHasDepartamento-update'))
        {    
            $model = $this->findModel($Caracterizacion_id, $Departamento_id);
            if ($model->load(Yii::$app->request->post())) {
                $model->save();
                return $this->redirect(['view', 'Caracterizacion_id' => $model->Caracterizacion_id, 'Departamento_id' => $model->Departamento_id]);
            } else {
                return $this->render('update', [
                    'model' => $model,
                ]);
            }
        }
        else
            throw new UnauthorizedHttpException(Yii::t('app', 'You are not authorized to access this view.'));
    }

    /**
     * Deletes an existing CaracterizacionHasDepartamento model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $Caracterizacion_id
     * @param integer $Departamento_id
     * @return mixed
     */
    public function actionDelete($Caracterizacion_id, $Departamento_id)
    {
        if(Yii::$app->user->can('caracterizacionHasDepartamento-delete'))
        {
            $this->findModel($Caracterizacion_id, $Departamento_id)->delete();
            return $this->redirect(['index']);
        }
        else
            throw new UnauthorizedHttpException(Yii::t('app', 'You are not authorized to access this view.'));
    }

    /**
     * Finds the CaracterizacionHasDepartamento model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $Caracterizacion_id
     * @param integer $Departamento_id
     * @return CaracterizacionHasDepartamento the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Caracterizacion_id, $Departamento_id)
    {
        if (($model = CaracterizacionHasDepartamento::findOne(['Caracterizacion_id' => $Caracterizacion_id, 'Departamento_id' => $Departamento_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
