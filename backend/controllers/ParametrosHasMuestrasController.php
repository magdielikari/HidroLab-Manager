<?php

namespace backend\controllers;

use Yii;
use common\models\ParametrosHasMuestras;
use common\models\search\ParametrosHasMuestrasSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\forbiddenHttpException;
use yii\web\UnauthorizedHttpException;

/**
 * ParametrosHasMuestrasController implements the CRUD actions for ParametrosHasMuestras model.
 */
class ParametrosHasMuestrasController extends Controller
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
     * Lists all ParametrosHasMuestras models.
     * @return mixed
     */
    public function actionIndex()
    {
        if(Yii::$app->user->can('parametrosHasMuestras-index'))
        {    
            $searchModel = new ParametrosHasMuestrasSearch();
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
        if(Yii::$app->user->can('parametrosHasMuestras-select'))
        {    
            $searchModel = new ParametrosHasMuestrasSearch();
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
     * Displays a single ParametrosHasMuestras model.
     * @param string $Parametros_id
     * @param string $Muestras_id
     * @return mixed
     */
    public function actionView($Parametros_id, $Muestras_id)
    {
        if(Yii::$app->user->can('parametrosHasMuestras-view'))
        {    
            return $this->render('view', [
                'model' => $this->findModel($Parametros_id, $Muestras_id),
            ]);
        }
        else
            throw new UnauthorizedHttpException(Yii::t('app', 'You are not authorized to access this view.'));
    }

    /**
     * Creates a new ParametrosHasMuestras model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if(Yii::$app->user->can('parametrosHasMuestras-create'))
        {    
            $model = new ParametrosHasMuestras();
            if ($model->load(Yii::$app->request->post())) {
                $model->save();
                return $this->redirect(['view', 'Parametros_id' => $model->Parametros_id, 'Muestras_id' => $model->Muestras_id]);
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
        if(Yii::$app->user->can('parametrosHasMuestras-establish'))
        {    
            $model = new ParametrosHasMuestras();
            if ($model->load(Yii::$app->request->post())) {
                $model->save();
                return $this->redirect(['view', 'Parametros_id' => $model->Parametros_id, 'Muestras_id' => $model->Muestras_id]);
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
     * Updates an existing ParametrosHasMuestras model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $Parametros_id
     * @param string $Muestras_id
     * @return mixed
     */
    public function actionUpdate($Parametros_id, $Muestras_id)
    {
        if(Yii::$app->user->can('parametrosHasMuestras-update'))
        {    
            $model = $this->findModel($Parametros_id, $Muestras_id);
            if ($model->load(Yii::$app->request->post())) {
                $model->save();
                return $this->redirect(['view', 'Parametros_id' => $model->Parametros_id, 'Muestras_id' => $model->Muestras_id]);
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
     * Deletes an existing ParametrosHasMuestras model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $Parametros_id
     * @param string $Muestras_id
     * @return mixed
     */
    public function actionDelete($Parametros_id, $Muestras_id)
    {
        if(Yii::$app->user->can('parametrosHasMuestras-delete'))
        {   
            $this->findModel($Parametros_id, $Muestras_id)->delete();
            return $this->redirect(['index']);
        }
        else
            throw new UnauthorizedHttpException(Yii::t('app', 'You are not authorized to access this view.'));
    }

    /**
     * Finds the ParametrosHasMuestras model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $Parametros_id
     * @param string $Muestras_id
     * @return ParametrosHasMuestras the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Parametros_id, $Muestras_id)
    {
        if (($model = ParametrosHasMuestras::findOne(['Parametros_id' => $Parametros_id, 'Muestras_id' => $Muestras_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
