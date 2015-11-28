<?php

namespace backend\controllers;

use Yii;
use common\models\CostopredeterminadosHasAdministrativos;
use common\models\search\CostopredeterminadosHasAdministrativosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\forbiddenHttpException;
use yii\web\UnauthorizedHttpException;

/**
 * CostopredeterminadosHasAdministrativosController implements the CRUD actions for CostopredeterminadosHasAdministrativos model.
 */
class CostopredeterminadosHasAdministrativosController extends Controller
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
     * Lists all CostopredeterminadosHasAdministrativos models.
     * @return mixed
     */
    public function actionIndex()
    {
        if(Yii::$app->user->can('costopredeterminadosHasAdministrativos-index'))
        {    
            $searchModel = new CostopredeterminadosHasAdministrativosSearch();
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
        if(Yii::$app->user->can('costopredeterminadosHasAdministrativos-select'))
        {    
            $searchModel = new CostopredeterminadosHasAdministrativosSearch();
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
     * Displays a single CostopredeterminadosHasAdministrativos model.
     * @param string $CostoPredeterminados_id
     * @param string $Administrativos_id
     * @return mixed
     */
    public function actionView($CostoPredeterminados_id, $Administrativos_id)
    {
        if(Yii::$app->user->can('costopredeterminadosHasAdministrativos-view'))
        {    
            return $this->render('view', [
                'model' => $this->findModel($CostoPredeterminados_id, $Administrativos_id),
            ]);
        }
        else
            throw new UnauthorizedHttpException(Yii::t('app', 'You are not authorized to access this view.'));
    }

    /**
     * Creates a new CostopredeterminadosHasAdministrativos model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if(Yii::$app->user->can('costopredeterminadosHasAdministrativos-create'))
        {    
            $model = new CostopredeterminadosHasAdministrativos();
            if ($model->load(Yii::$app->request->post())) {
                $model->save();
                return $this->redirect(['view', 'CostoPredeterminados_id' => $model->CostoPredeterminados_id, 'Administrativos_id' => $model->Administrativos_id]);
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
        if(Yii::$app->user->can('costopredeterminadosHasAdministrativos-establish'))
        {    
            $model = new CostopredeterminadosHasAdministrativos();
            if ($model->load(Yii::$app->request->post())) {
                $model->save();
                return $this->redirect(['view', 'CostoPredeterminados_id' => $model->CostoPredeterminados_id, 'Administrativos_id' => $model->Administrativos_id]);
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
     * Updates an existing CostopredeterminadosHasAdministrativos model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $CostoPredeterminados_id
     * @param string $Administrativos_id
     * @return mixed
     */
    public function actionUpdate($CostoPredeterminados_id, $Administrativos_id)
    {
        if(Yii::$app->user->can('costopredeterminadosHasAdministrativos-update'))
        {    
            $model = $this->findModel($CostoPredeterminados_id, $Administrativos_id);
            if ($model->load(Yii::$app->request->post())) {
                $model->save();
                return $this->redirect(['view', 'CostoPredeterminados_id' => $model->CostoPredeterminados_id, 'Administrativos_id' => $model->Administrativos_id]);
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
     * Deletes an existing CostopredeterminadosHasAdministrativos model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $CostoPredeterminados_id
     * @param string $Administrativos_id
     * @return mixed
     */
    public function actionDelete($CostoPredeterminados_id, $Administrativos_id)
    {
        if(Yii::$app->user->can('costopredeterminadosHasAdministrativos-delete'))
        {    
            $this->findModel($CostoPredeterminados_id, $Administrativos_id)->delete();
            return $this->redirect(['index']);
        }
        else
            throw new UnauthorizedHttpException(Yii::t('app', 'You are not authorized to access this view.'));
    }

    /**
     * Finds the CostopredeterminadosHasAdministrativos model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $CostoPredeterminados_id
     * @param string $Administrativos_id
     * @return CostopredeterminadosHasAdministrativos the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($CostoPredeterminados_id, $Administrativos_id)
    {
        if (($model = CostopredeterminadosHasAdministrativos::findOne(['CostoPredeterminados_id' => $CostoPredeterminados_id, 'Administrativos_id' => $Administrativos_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
