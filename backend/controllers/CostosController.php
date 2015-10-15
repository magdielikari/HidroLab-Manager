<?php

namespace backend\controllers;

use Yii;
use common\models\Costos;
use common\models\search\CostosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CostosController implements the CRUD actions for Costos model.
 */
class CostosController extends Controller
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
     * Lists all Costos models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CostosSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Costos model.
     * @param string $id
     * @param string $General_id
     * @param string $CostoParametro_id
     * @param string $CostoParametro_Parametros_id
     * @param string $CostoMuestra_id
     * @return mixed
     */
    public function actionView($id, $General_id, $CostoParametro_id, $CostoParametro_Parametros_id, $CostoMuestra_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $General_id, $CostoParametro_id, $CostoParametro_Parametros_id, $CostoMuestra_id),
        ]);
    }

    /**
     * Creates a new Costos model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Costos();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'General_id' => $model->General_id, 'CostoParametro_id' => $model->CostoParametro_id, 'CostoParametro_Parametros_id' => $model->CostoParametro_Parametros_id, 'CostoMuestra_id' => $model->CostoMuestra_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Costos model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @param string $General_id
     * @param string $CostoParametro_id
     * @param string $CostoParametro_Parametros_id
     * @param string $CostoMuestra_id
     * @return mixed
     */
    public function actionUpdate($id, $General_id, $CostoParametro_id, $CostoParametro_Parametros_id, $CostoMuestra_id)
    {
        $model = $this->findModel($id, $General_id, $CostoParametro_id, $CostoParametro_Parametros_id, $CostoMuestra_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'General_id' => $model->General_id, 'CostoParametro_id' => $model->CostoParametro_id, 'CostoParametro_Parametros_id' => $model->CostoParametro_Parametros_id, 'CostoMuestra_id' => $model->CostoMuestra_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Costos model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @param string $General_id
     * @param string $CostoParametro_id
     * @param string $CostoParametro_Parametros_id
     * @param string $CostoMuestra_id
     * @return mixed
     */
    public function actionDelete($id, $General_id, $CostoParametro_id, $CostoParametro_Parametros_id, $CostoMuestra_id)
    {
        $this->findModel($id, $General_id, $CostoParametro_id, $CostoParametro_Parametros_id, $CostoMuestra_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Costos model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @param string $General_id
     * @param string $CostoParametro_id
     * @param string $CostoParametro_Parametros_id
     * @param string $CostoMuestra_id
     * @return Costos the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $General_id, $CostoParametro_id, $CostoParametro_Parametros_id, $CostoMuestra_id)
    {
        if (($model = Costos::findOne(['id' => $id, 'General_id' => $General_id, 'CostoParametro_id' => $CostoParametro_id, 'CostoParametro_Parametros_id' => $CostoParametro_Parametros_id, 'CostoMuestra_id' => $CostoMuestra_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
