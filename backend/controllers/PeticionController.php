<?php

namespace backend\controllers;

use Yii;
use common\models\Peticion;
use common\models\search\PeticionSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PeticionController implements the CRUD actions for Peticion model.
 */
class PeticionController extends Controller
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
     * Lists all Peticion models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PeticionSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Peticion model.
     * @param string $id
     * @param string $costos_id
     * @param string $costos_General_id
     * @param integer $costos_CostoParametro_id
     * @param string $costos_CostoParametro_Parametros_id
     * @param string $costos_costoMuestra_id
     * @param string $General_id
     * @param string $Muestras_id
     * @return mixed
     */
    public function actionView($id, $costos_id, $costos_General_id, $costos_CostoParametro_id, $costos_CostoParametro_Parametros_id, $costos_costoMuestra_id, $General_id, $Muestras_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $costos_id, $costos_General_id, $costos_CostoParametro_id, $costos_CostoParametro_Parametros_id, $costos_costoMuestra_id, $General_id, $Muestras_id),
        ]);
    }

    /**
     * Creates a new Peticion model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Peticion();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'costos_id' => $model->costos_id, 'costos_General_id' => $model->costos_General_id, 'costos_CostoParametro_id' => $model->costos_CostoParametro_id, 'costos_CostoParametro_Parametros_id' => $model->costos_CostoParametro_Parametros_id, 'costos_costoMuestra_id' => $model->costos_costoMuestra_id, 'General_id' => $model->General_id, 'Muestras_id' => $model->Muestras_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Peticion model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @param string $costos_id
     * @param string $costos_General_id
     * @param integer $costos_CostoParametro_id
     * @param string $costos_CostoParametro_Parametros_id
     * @param string $costos_costoMuestra_id
     * @param string $General_id
     * @param string $Muestras_id
     * @return mixed
     */
    public function actionUpdate($id, $costos_id, $costos_General_id, $costos_CostoParametro_id, $costos_CostoParametro_Parametros_id, $costos_costoMuestra_id, $General_id, $Muestras_id)
    {
        $model = $this->findModel($id, $costos_id, $costos_General_id, $costos_CostoParametro_id, $costos_CostoParametro_Parametros_id, $costos_costoMuestra_id, $General_id, $Muestras_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'costos_id' => $model->costos_id, 'costos_General_id' => $model->costos_General_id, 'costos_CostoParametro_id' => $model->costos_CostoParametro_id, 'costos_CostoParametro_Parametros_id' => $model->costos_CostoParametro_Parametros_id, 'costos_costoMuestra_id' => $model->costos_costoMuestra_id, 'General_id' => $model->General_id, 'Muestras_id' => $model->Muestras_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Peticion model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @param string $costos_id
     * @param string $costos_General_id
     * @param integer $costos_CostoParametro_id
     * @param string $costos_CostoParametro_Parametros_id
     * @param string $costos_costoMuestra_id
     * @param string $General_id
     * @param string $Muestras_id
     * @return mixed
     */
    public function actionDelete($id, $costos_id, $costos_General_id, $costos_CostoParametro_id, $costos_CostoParametro_Parametros_id, $costos_costoMuestra_id, $General_id, $Muestras_id)
    {
        $this->findModel($id, $costos_id, $costos_General_id, $costos_CostoParametro_id, $costos_CostoParametro_Parametros_id, $costos_costoMuestra_id, $General_id, $Muestras_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Peticion model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @param string $costos_id
     * @param string $costos_General_id
     * @param integer $costos_CostoParametro_id
     * @param string $costos_CostoParametro_Parametros_id
     * @param string $costos_costoMuestra_id
     * @param string $General_id
     * @param string $Muestras_id
     * @return Peticion the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $costos_id, $costos_General_id, $costos_CostoParametro_id, $costos_CostoParametro_Parametros_id, $costos_costoMuestra_id, $General_id, $Muestras_id)
    {
        if (($model = Peticion::findOne(['id' => $id, 'costos_id' => $costos_id, 'costos_General_id' => $costos_General_id, 'costos_CostoParametro_id' => $costos_CostoParametro_id, 'costos_CostoParametro_Parametros_id' => $costos_CostoParametro_Parametros_id, 'costos_costoMuestra_id' => $costos_costoMuestra_id, 'General_id' => $General_id, 'Muestras_id' => $Muestras_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
