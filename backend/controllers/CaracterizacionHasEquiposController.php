<?php

namespace backend\controllers;

use Yii;
use common\models\CaracterizacionHasEquipos;
use common\models\search\CaracterizacionHasEquiposSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\forbiddenHttpException;

/**
 * CaracterizacionHasEquiposController implements the CRUD actions for CaracterizacionHasEquipos model.
 */
class CaracterizacionHasEquiposController extends Controller
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
     * Lists all CaracterizacionHasEquipos models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CaracterizacionHasEquiposSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CaracterizacionHasEquipos model.
     * @param integer $Caracterizacion_id
     * @param integer $Equipos_id
     * @return mixed
     */
    public function actionView($Caracterizacion_id, $Equipos_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($Caracterizacion_id, $Equipos_id),
        ]);
    }

    /**
     * Creates a new CaracterizacionHasEquipos model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new CaracterizacionHasEquipos();

        if ($model->load(Yii::$app->request->post())) {
            $model->save();
            return $this->redirect(['view', 'Caracterizacion_id' => $model->Caracterizacion_id, 'Equipos_id' => $model->Equipos_id]);
        } else {
            return $this->renderAjax('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing CaracterizacionHasEquipos model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $Caracterizacion_id
     * @param integer $Equipos_id
     * @return mixed
     */
    public function actionUpdate($Caracterizacion_id, $Equipos_id)
    {
        $model = $this->findModel($Caracterizacion_id, $Equipos_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Caracterizacion_id' => $model->Caracterizacion_id, 'Equipos_id' => $model->Equipos_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing CaracterizacionHasEquipos model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $Caracterizacion_id
     * @param integer $Equipos_id
     * @return mixed
     */
    public function actionDelete($Caracterizacion_id, $Equipos_id)
    {
        $this->findModel($Caracterizacion_id, $Equipos_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the CaracterizacionHasEquipos model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $Caracterizacion_id
     * @param integer $Equipos_id
     * @return CaracterizacionHasEquipos the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Caracterizacion_id, $Equipos_id)
    {
        if (($model = CaracterizacionHasEquipos::findOne(['Caracterizacion_id' => $Caracterizacion_id, 'Equipos_id' => $Equipos_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
