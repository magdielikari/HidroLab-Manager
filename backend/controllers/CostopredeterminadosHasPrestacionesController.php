<?php

namespace backend\controllers;

use Yii;
use common\models\CostopredeterminadosHasPrestaciones;
use common\models\search\CostopredeterminadosHasPrestacionesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\forbiddenHttpException;
use yii\web\UnauthorizedHttpException;

/**
 * CostopredeterminadosHasPrestacionesController implements the CRUD actions for CostopredeterminadosHasPrestaciones model.
 */
class CostopredeterminadosHasPrestacionesController extends Controller
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
     * Lists all CostopredeterminadosHasPrestaciones models.
     * @return mixed
     */
    public function actionIndex()
    {
        if(Yii::$app->user->can('costopredeterminadosHasPrestaciones-index'))
        {    
            $searchModel = new CostopredeterminadosHasPrestacionesSearch();
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
        if(Yii::$app->user->can('costopredeterminadosHasPrestaciones-select'))
        {    
            $searchModel = new CostopredeterminadosHasPrestacionesSearch();
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
     * Displays a single CostopredeterminadosHasPrestaciones model.
     * @param string $CostoPredeterminados_id
     * @param string $Prestaciones_id
     * @return mixed
     */
    public function actionView($CostoPredeterminados_id, $Prestaciones_id)
    {
        if(Yii::$app->user->can('costopredeterminadosHasPrestaciones-view'))
        {    
            return $this->render('view', [
                'model' => $this->findModel($CostoPredeterminados_id, $Prestaciones_id),
            ]);
        }
        else
            throw new UnauthorizedHttpException(Yii::t('app', 'You are not authorized to access this view.'));
    }

    /**
     * Creates a new CostopredeterminadosHasPrestaciones model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if(Yii::$app->user->can('costopredeterminadosHasPrestaciones-create'))
        {    
            $model = new CostopredeterminadosHasPrestaciones();
            if ($model->load(Yii::$app->request->post())) {
                $model->save();
                return $this->redirect(['view', 'CostoPredeterminados_id' => $model->CostoPredeterminados_id, 'Prestaciones_id' => $model->Prestaciones_id]);
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
        if(Yii::$app->user->can('costopredeterminadosHasPrestaciones-establish'))
        {    
            $model = new CostopredeterminadosHasPrestaciones();
            if ($model->load(Yii::$app->request->post())) {
                $model->save();
                return $this->redirect(['view', 'CostoPredeterminados_id' => $model->CostoPredeterminados_id, 'Prestaciones_id' => $model->Prestaciones_id]);
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
     * Updates an existing CostopredeterminadosHasPrestaciones model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $CostoPredeterminados_id
     * @param string $Prestaciones_id
     * @return mixed
     */
    public function actionUpdate($CostoPredeterminados_id, $Prestaciones_id)
    {
        if(Yii::$app->user->can('costopredeterminadosHasPrestaciones-update'))
        {    
            $model = $this->findModel($CostoPredeterminados_id, $Prestaciones_id);
            if ($model->load(Yii::$app->request->post())) {
                $model->save();
                return $this->redirect(['view', 'CostoPredeterminados_id' => $model->CostoPredeterminados_id, 'Prestaciones_id' => $model->Prestaciones_id]);
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
     * Deletes an existing CostopredeterminadosHasPrestaciones model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $CostoPredeterminados_id
     * @param string $Prestaciones_id
     * @return mixed
     */
    public function actionDelete($CostoPredeterminados_id, $Prestaciones_id)
    {
        if(Yii::$app->user->can('costopredeterminadosHasPrestaciones-delete'))
        {    
            $this->findModel($CostoPredeterminados_id, $Prestaciones_id)->delete();
            return $this->redirect(['index']);
        }
        else
            throw new UnauthorizedHttpException(Yii::t('app', 'You are not authorized to access this view.'));
    }

    /**
     * Finds the CostopredeterminadosHasPrestaciones model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $CostoPredeterminados_id
     * @param string $Prestaciones_id
     * @return CostopredeterminadosHasPrestaciones the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($CostoPredeterminados_id, $Prestaciones_id)
    {
        if (($model = CostopredeterminadosHasPrestaciones::findOne(['CostoPredeterminados_id' => $CostoPredeterminados_id, 'Prestaciones_id' => $Prestaciones_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
