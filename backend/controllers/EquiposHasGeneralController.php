<?php

namespace backend\controllers;

use Yii;
use common\models\EquiposHasGeneral;
use common\models\search\EquiposHasGeneralSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\forbiddenHttpException;
use yii\web\UnauthorizedHttpException;

/**
 * EquiposHasGeneralController implements the CRUD actions for EquiposHasGeneral model.
 */
class EquiposHasGeneralController extends Controller
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
     * Lists all EquiposHasGeneral models.
     * @return mixed
     */
    public function actionIndex()
    {
        if(Yii::$app->user->can('equiposHasGeneral-index'))
        {    
            $searchModel = new EquiposHasGeneralSearch();
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
        if(Yii::$app->user->can('equiposHasGeneral-select'))
        {    
            $searchModel = new EquiposHasGeneralSearch();
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
     * Displays a single EquiposHasGeneral model.
     * @param integer $Equipos_id
     * @param string $General_id
     * @return mixed
     */
    public function actionView($Equipos_id, $General_id)
    {
        if(Yii::$app->user->can('equiposHasGeneral-view'))
        {    
            return $this->render('view', [
                'model' => $this->findModel($Equipos_id, $General_id),
            ]);
        }
        else
            throw new UnauthorizedHttpException(Yii::t('app', 'You are not authorized to access this view.'));
    }

    /**
     * Creates a new EquiposHasGeneral model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if(Yii::$app->user->can('equiposHasGeneral-create'))
        {    
            $model = new EquiposHasGeneral();
            if ($model->load(Yii::$app->request->post())) {
                $model->save();
                return $this->redirect(['view', 'Equipos_id' => $model->Equipos_id, 'General_id' => $model->General_id]);
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
        if(Yii::$app->user->can('equiposHasGeneral-establish'))
        {    
            $model = new EquiposHasGeneral();
            if ($model->load(Yii::$app->request->post())) {
                $model->save();
                return $this->redirect(['view', 'Equipos_id' => $model->Equipos_id, 'General_id' => $model->General_id]);
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
     * Updates an existing EquiposHasGeneral model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $Equipos_id
     * @param string $General_id
     * @return mixed
     */
    public function actionUpdate($Equipos_id, $General_id)
    {
        if(Yii::$app->user->can('equiposHasGeneral-update'))
        {    
            $model = $this->findModel($Equipos_id, $General_id);
            if ($model->load(Yii::$app->request->post())) {
                $model->save();
                return $this->redirect(['view', 'Equipos_id' => $model->Equipos_id, 'General_id' => $model->General_id]);
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
     * Deletes an existing EquiposHasGeneral model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $Equipos_id
     * @param string $General_id
     * @return mixed
     */
    public function actionDelete($Equipos_id, $General_id)
    {
        if(Yii::$app->user->can('equiposHasGeneral-delete'))
        {    
            $this->findModel($Equipos_id, $General_id)->delete();
            return $this->redirect(['index']);
        }
        else
            throw new UnauthorizedHttpException(Yii::t('app', 'You are not authorized to access this view.'));
    }

    /**
     * Finds the EquiposHasGeneral model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $Equipos_id
     * @param string $General_id
     * @return EquiposHasGeneral the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Equipos_id, $General_id)
    {
        if (($model = EquiposHasGeneral::findOne(['Equipos_id' => $Equipos_id, 'General_id' => $General_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
