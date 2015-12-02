<?php

namespace backend\controllers;

use Yii;
use common\models\CostopredeterminadosHasParametros;
use common\models\search\CostopredeterminadosHasParametrosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\forbiddenHttpException;

use yii\web\UnauthorizedHttpException;
/**
 * CostopredeterminadosHasParametrosController implements the CRUD actions for CostopredeterminadosHasParametros model.
 */
class CostopredeterminadosHasParametrosController extends Controller
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
     * Lists all CostopredeterminadosHasParametros models.
     * @return mixed
     */
    public function actionIndex()
    {
        if(Yii::$app->user->can('costopredeterminadosHasParametros-index'))
        {    
            $searchModel = new CostopredeterminadosHasParametrosSearch();
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
        if(Yii::$app->user->can('costopredeterminadosHasParametros-select'))
        {    
            $searchModel = new CostopredeterminadosHasParametrosSearch();
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
     * Displays a single CostopredeterminadosHasParametros model.
     * @param string $CostoPredeterminados_id
     * @param string $Parametros_id
     * @return mixed
     */
    public function actionView($CostoPredeterminados_id, $Parametros_id)
    {
        if(Yii::$app->user->can('costopredeterminadosHasParametros-view'))
        {    
            return $this->render('view', [
                'model' => $this->findModel($CostoPredeterminados_id, $Parametros_id),
            ]);
        }
        else
            throw new UnauthorizedHttpException(Yii::t('app', 'You are not authorized to access this view.'));
    }

    /**
     * Creates a new CostopredeterminadosHasParametros model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if(Yii::$app->user->can('costopredeterminadosHasParametros-create'))
        {    
            $model = new CostopredeterminadosHasParametros();
            if ($model->load(Yii::$app->request->post())) {
                $model->save();
                return $this->redirect(['view', 'CostoPredeterminados_id' => $model->CostoPredeterminados_id, 'Parametros_id' => $model->Parametros_id]);
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
        if(Yii::$app->user->can('costopredeterminadosHasParametros-establish'))
        {    
            $model = new CostopredeterminadosHasParametros();
            if ($model->load(Yii::$app->request->post())) {
                $model->save();
                return $this->redirect(['view', 'CostoPredeterminados_id' => $model->CostoPredeterminados_id, 'Parametros_id' => $model->Parametros_id]);
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
     * Updates an existing CostopredeterminadosHasParametros model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $CostoPredeterminados_id
     * @param string $Parametros_id
     * @return mixed
     */
    public function actionUpdate($CostoPredeterminados_id, $Parametros_id)
    {
        if(Yii::$app->user->can('costopredeterminadosHasParametros-update'))
        {   
            $model = $this->findModel($CostoPredeterminados_id, $Parametros_id);
            if ($model->load(Yii::$app->request->post())) {
                $model->save();
                return $this->redirect(['view', 'CostoPredeterminados_id' => $model->CostoPredeterminados_id, 'Parametros_id' => $model->Parametros_id]);
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
     * Deletes an existing CostopredeterminadosHasParametros model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $CostoPredeterminados_id
     * @param string $Parametros_id
     * @return mixed
     */
    public function actionDelete($CostoPredeterminados_id, $Parametros_id)
    {
        if(Yii::$app->user->can('costopredeterminadosHasParametros-delete'))
        {    
            $this->findModel($CostoPredeterminados_id, $Parametros_id)->delete();
            return $this->redirect(['index']);
        }
        else
            throw new UnauthorizedHttpException(Yii::t('app', 'You are not authorized to access this view.'));
    }

    /**
     * Finds the CostopredeterminadosHasParametros model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $CostoPredeterminados_id
     * @param string $Parametros_id
     * @return CostopredeterminadosHasParametros the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($CostoPredeterminados_id, $Parametros_id)
    {
        if (($model = CostopredeterminadosHasParametros::findOne(['CostoPredeterminados_id' => $CostoPredeterminados_id, 'Parametros_id' => $Parametros_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
