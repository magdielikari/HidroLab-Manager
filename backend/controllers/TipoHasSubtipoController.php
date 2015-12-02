<?php

namespace backend\controllers;

use Yii;
use common\models\TipoHasSubtipo;
use common\models\search\TipoHasSubtipoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\forbiddenHttpException;
use yii\web\UnauthorizedHttpException;

/**
 * TipoHasSubtipoController implements the CRUD actions for TipoHasSubtipo model.
 */
class TipoHasSubtipoController extends Controller
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
     * Lists all TipoHasSubtipo models.
     * @return mixed
     */
    public function actionIndex()
    {
        if(Yii::$app->user->can('tipoHasSubtipo-index'))
        {    
            $searchModel = new TipoHasSubtipoSearch();
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
     * Lists all TipoHasSubtipo models for AJAX calls
     * @return mixed
     */
    public function actionSelect()
    {
        $searchModel = new TipoHasSubtipoSearch();
        $dataProvider = $searchModel->search(['TipoHasSubtipoSearch'=>Yii::$app->request->queryParams]);

        return $this->renderAjax('select', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TipoHasSubtipo model.
     * @param integer $Tipo_id
     * @param integer $SubTipo_id
     * @return mixed
     */
    public function actionView($Tipo_id, $SubTipo_id)
    {
        if(Yii::$app->user->can('tipoHasSubtipo-view'))
        {    
            return $this->render('view', [
                'model' => $this->findModel($Tipo_id, $SubTipo_id),
            ]);
        }
        else
            throw new UnauthorizedHttpException(Yii::t('app', 'You are not authorized to access this view.'));
    }

    /**
     * Creates a new TipoHasSubtipo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if(Yii::$app->user->can('tipoHasSubtipo-create'))
        {    
            $model = new TipoHasSubtipo();
            if ($model->load(Yii::$app->request->post())) {
                $model->save();
                return $this->redirect(['view', 'Tipo_id' => $model->Tipo_id, 'SubTipo_id' => $model->SubTipo_id]);
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
     * Updates an existing TipoHasSubtipo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $Tipo_id
     * @param integer $SubTipo_id
     * @return mixed
     */
    public function actionUpdate($Tipo_id, $SubTipo_id)
    {
        if(Yii::$app->user->can('tipoHasSubtipo-update'))
        {    
            $model = $this->findModel($Tipo_id, $SubTipo_id);
            if ($model->load(Yii::$app->request->post())) {
                $model->save();
                return $this->redirect(['view', 'Tipo_id' => $model->Tipo_id, 'SubTipo_id' => $model->SubTipo_id]);
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
     * Deletes an existing TipoHasSubtipo model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $Tipo_id
     * @param integer $SubTipo_id
     * @return mixed
     */
    public function actionDelete($Tipo_id, $SubTipo_id)
    {
        if(Yii::$app->user->can('tipoHasSubtipo-delete'))
        {
            $this->findModel($Tipo_id, $SubTipo_id)->delete();
            return $this->redirect(['index']);
        }
        else
            throw new UnauthorizedHttpException(Yii::t('app', 'You are not authorized to access this view.'));
    }

    /**
     * Finds the TipoHasSubtipo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $Tipo_id
     * @param integer $SubTipo_id
     * @return TipoHasSubtipo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Tipo_id, $SubTipo_id)
    {
        if (($model = TipoHasSubtipo::findOne(['Tipo_id' => $Tipo_id, 'SubTipo_id' => $SubTipo_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
