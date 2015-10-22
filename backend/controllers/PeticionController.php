<?php

namespace backend\controllers;

use Yii;
use common\models\Peticion;
use common\models\search\PeticionSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\forbiddenHttpException;

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

    public function actionIndice()
    {
        $searchModel = new PeticionSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->renderAjax('indice', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Peticion model.
     * @param string $id
     * @param string $Referencia_id
     * @param string $Costos_id
     * @param string $Costos_General_id
     * @param string $Costos_CostoParametro_id
     * @param string $Costos_CostoParametro_Parametros_id
     * @param string $Costos_CostoMuestra_id
     * @param string $General_id
     * @param string $Muestras_id
     * @return mixed
     */
    public function actionView($id, $Referencia_id, $Costos_id, $Costos_General_id, $Costos_CostoParametro_id, $Costos_CostoParametro_Parametros_id, $Costos_CostoMuestra_id, $General_id, $Muestras_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $Referencia_id, $Costos_id, $Costos_General_id, $Costos_CostoParametro_id, $Costos_CostoParametro_Parametros_id, $Costos_CostoMuestra_id, $General_id, $Muestras_id),
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

        if ($model->load(Yii::$app->request->post())) {
            $model->save();
            return $this->redirect(['view', 'id' => $model->id, 'Referencia_id' => $model->Referencia_id, 'Costos_id' => $model->Costos_id, 'Costos_General_id' => $model->Costos_General_id, 'Costos_CostoParametro_id' => $model->Costos_CostoParametro_id, 'Costos_CostoParametro_Parametros_id' => $model->Costos_CostoParametro_Parametros_id, 'Costos_CostoMuestra_id' => $model->Costos_CostoMuestra_id, 'General_id' => $model->General_id, 'Muestras_id' => $model->Muestras_id]);
        } else {
            return $this->renderAjax('create', [
                'model' => $model,
            ]);
        }
    }

    public function actionCrear()
    {
        return $this->render('crear');
    }

    /**
     * Updates an existing Peticion model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @param string $Referencia_id
     * @param string $Costos_id
     * @param string $Costos_General_id
     * @param string $Costos_CostoParametro_id
     * @param string $Costos_CostoParametro_Parametros_id
     * @param string $Costos_CostoMuestra_id
     * @param string $General_id
     * @param string $Muestras_id
     * @return mixed
     */
    public function actionUpdate($id, $Referencia_id, $Costos_id, $Costos_General_id, $Costos_CostoParametro_id, $Costos_CostoParametro_Parametros_id, $Costos_CostoMuestra_id, $General_id, $Muestras_id)
    {
        $model = $this->findModel($id, $Referencia_id, $Costos_id, $Costos_General_id, $Costos_CostoParametro_id, $Costos_CostoParametro_Parametros_id, $Costos_CostoMuestra_id, $General_id, $Muestras_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'Referencia_id' => $model->Referencia_id, 'Costos_id' => $model->Costos_id, 'Costos_General_id' => $model->Costos_General_id, 'Costos_CostoParametro_id' => $model->Costos_CostoParametro_id, 'Costos_CostoParametro_Parametros_id' => $model->Costos_CostoParametro_Parametros_id, 'Costos_CostoMuestra_id' => $model->Costos_CostoMuestra_id, 'General_id' => $model->General_id, 'Muestras_id' => $model->Muestras_id]);
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
     * @param string $Referencia_id
     * @param string $Costos_id
     * @param string $Costos_General_id
     * @param string $Costos_CostoParametro_id
     * @param string $Costos_CostoParametro_Parametros_id
     * @param string $Costos_CostoMuestra_id
     * @param string $General_id
     * @param string $Muestras_id
     * @return mixed
     */
    public function actionDelete($id, $Referencia_id, $Costos_id, $Costos_General_id, $Costos_CostoParametro_id, $Costos_CostoParametro_Parametros_id, $Costos_CostoMuestra_id, $General_id, $Muestras_id)
    {
        $this->findModel($id, $Referencia_id, $Costos_id, $Costos_General_id, $Costos_CostoParametro_id, $Costos_CostoParametro_Parametros_id, $Costos_CostoMuestra_id, $General_id, $Muestras_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Peticion model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @param string $Referencia_id
     * @param string $Costos_id
     * @param string $Costos_General_id
     * @param string $Costos_CostoParametro_id
     * @param string $Costos_CostoParametro_Parametros_id
     * @param string $Costos_CostoMuestra_id
     * @param string $General_id
     * @param string $Muestras_id
     * @return Peticion the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $Referencia_id, $Costos_id, $Costos_General_id, $Costos_CostoParametro_id, $Costos_CostoParametro_Parametros_id, $Costos_CostoMuestra_id, $General_id, $Muestras_id)
    {
        if (($model = Peticion::findOne(['id' => $id, 'Referencia_id' => $Referencia_id, 'Costos_id' => $Costos_id, 'Costos_General_id' => $Costos_General_id, 'Costos_CostoParametro_id' => $Costos_CostoParametro_id, 'Costos_CostoParametro_Parametros_id' => $Costos_CostoParametro_Parametros_id, 'Costos_CostoMuestra_id' => $Costos_CostoMuestra_id, 'General_id' => $General_id, 'Muestras_id' => $Muestras_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
