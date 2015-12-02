<?php

namespace backend\controllers;

use Yii;
use common\models\ParametrosHasMuestrasHasCostopredeterminados;
use common\models\search\ParametrosHasMuestrasHasCostopredeterminadosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\forbiddenHttpException;
use yii\web\UnauthorizedHttpException;

/**
 * ParametrosHasMuestrasHasCostopredeterminadosController implements the CRUD actions for ParametrosHasMuestrasHasCostopredeterminados model.
 */
class ParametrosHasMuestrasHasCostopredeterminadosController extends Controller
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
     * Lists all ParametrosHasMuestrasHasCostopredeterminados models.
     * @return mixed
     */
    public function actionIndex()
    {
        if(Yii::$app->user->can('parametrosHasMuestrasHasCostopredeterminados-index'))
        {
            $searchModel = new ParametrosHasMuestrasHasCostopredeterminadosSearch();
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
        if(Yii::$app->user->can('parametrosHasMuestrasHasCostopredeterminados-select'))
        {
            $searchModel = new ParametrosHasMuestrasHasCostopredeterminadosSearch();
            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
            return $this->renderAjax('Select', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
            ]);
        }
        else
            throw new UnauthorizedHttpException(Yii::t('app', 'You are not authorized to access this view.'));
    }

    /**
     * Displays a single ParametrosHasMuestrasHasCostopredeterminados model.
     * @param string $Parametros_has_Muestras_Parametros_id
     * @param string $Parametros_has_Muestras_Muestras_id
     * @param string $CostoPredeterminados_id
     * @return mixed
     */
    public function actionView($Parametros_has_Muestras_Parametros_id, $Parametros_has_Muestras_Muestras_id, $CostoPredeterminados_id)
    {
        if(Yii::$app->user->can('parametrosHasMuestrasHasCostopredeterminados-view'))
        {    
            return $this->render('view', [
                'model' => $this->findModel($Parametros_has_Muestras_Parametros_id, $Parametros_has_Muestras_Muestras_id, $CostoPredeterminados_id),
            ]);
        }
        else
            throw new UnauthorizedHttpException(Yii::t('app', 'You are not authorized to access this view.'));
    }

    /**
     * Creates a new ParametrosHasMuestrasHasCostopredeterminados model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if(Yii::$app->user->can('parametrosHasMuestrasHasCostopredeterminados-create'))
        {    
            $model = new ParametrosHasMuestrasHasCostopredeterminados();
            if ($model->load(Yii::$app->request->post())) {
                $model->save();
                return $this->redirect(['view', 'Parametros_has_Muestras_Parametros_id' => $model->Parametros_has_Muestras_Parametros_id, 'Parametros_has_Muestras_Muestras_id' => $model->Parametros_has_Muestras_Muestras_id, 'CostoPredeterminados_id' => $model->CostoPredeterminados_id]);
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
        if(Yii::$app->user->can('parametrosHasMuestrasHasCostopredeterminados-establish'))
        {    
            $model = new ParametrosHasMuestrasHasCostopredeterminados();
            if ($model->load(Yii::$app->request->post())) {
                $model->save();
                return $this->redirect(['view', 'Parametros_has_Muestras_Parametros_id' => $model->Parametros_has_Muestras_Parametros_id, 'Parametros_has_Muestras_Muestras_id' => $model->Parametros_has_Muestras_Muestras_id, 'CostoPredeterminados_id' => $model->CostoPredeterminados_id]);
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
     * Updates an existing ParametrosHasMuestrasHasCostopredeterminados model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $Parametros_has_Muestras_Parametros_id
     * @param string $Parametros_has_Muestras_Muestras_id
     * @param string $CostoPredeterminados_id
     * @return mixed
     */
    public function actionUpdate($Parametros_has_Muestras_Parametros_id, $Parametros_has_Muestras_Muestras_id, $CostoPredeterminados_id)
    {
        if(Yii::$app->user->can('parametrosHasMuestrasHasCostopredeterminados-update'))
        {  
            $model = $this->findModel($Parametros_has_Muestras_Parametros_id, $Parametros_has_Muestras_Muestras_id, $CostoPredeterminados_id);
            if ($model->load(Yii::$app->request->post())) {
                $model->save();
                return $this->redirect(['view', 'Parametros_has_Muestras_Parametros_id' => $model->Parametros_has_Muestras_Parametros_id, 'Parametros_has_Muestras_Muestras_id' => $model->Parametros_has_Muestras_Muestras_id, 'CostoPredeterminados_id' => $model->CostoPredeterminados_id]);
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
     * Deletes an existing ParametrosHasMuestrasHasCostopredeterminados model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $Parametros_has_Muestras_Parametros_id
     * @param string $Parametros_has_Muestras_Muestras_id
     * @param string $CostoPredeterminados_id
     * @return mixed
     */
    public function actionDelete($Parametros_has_Muestras_Parametros_id, $Parametros_has_Muestras_Muestras_id, $CostoPredeterminados_id)
    {
        if(Yii::$app->user->can('parametrosHasMuestrasHasCostopredeterminados-delete'))
        {    
            $this->findModel($Parametros_has_Muestras_Parametros_id, $Parametros_has_Muestras_Muestras_id, $CostoPredeterminados_id)->delete();
            return $this->redirect(['index']);
        }
        else
            throw new UnauthorizedHttpException(Yii::t('app', 'You are not authorized to access this view.'));
    }

    /**
     * Finds the ParametrosHasMuestrasHasCostopredeterminados model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $Parametros_has_Muestras_Parametros_id
     * @param string $Parametros_has_Muestras_Muestras_id
     * @param string $CostoPredeterminados_id
     * @return ParametrosHasMuestrasHasCostopredeterminados the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Parametros_has_Muestras_Parametros_id, $Parametros_has_Muestras_Muestras_id, $CostoPredeterminados_id)
    {
        if (($model = ParametrosHasMuestrasHasCostopredeterminados::findOne(['Parametros_has_Muestras_Parametros_id' => $Parametros_has_Muestras_Parametros_id, 'Parametros_has_Muestras_Muestras_id' => $Parametros_has_Muestras_Muestras_id, 'CostoPredeterminados_id' => $CostoPredeterminados_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
