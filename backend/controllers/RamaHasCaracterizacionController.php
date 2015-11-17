<?php

namespace backend\controllers;

use Yii;
use common\models\RamaHasCaracterizacion;
use common\models\search\RamaHasCaracterizacionSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RamaHasCaracterizacionController implements the CRUD actions for RamaHasCaracterizacion model.
 */
class RamaHasCaracterizacionController extends Controller
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
     * Lists all RamaHasCaracterizacion models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new RamaHasCaracterizacionSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single RamaHasCaracterizacion model.
     * @param string $Rama_id
     * @param integer $Caracterizacion_id
     * @return mixed
     */
    public function actionView($Rama_id, $Caracterizacion_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($Rama_id, $Caracterizacion_id),
        ]);
    }

    /**
     * Creates a new RamaHasCaracterizacion model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new RamaHasCaracterizacion();

        if ($model->load(Yii::$app->request->post())) {
            $model->save();
            return $this->redirect(['view', 'Rama_id' => $model->Rama_id, 'Caracterizacion_id' => $model->Caracterizacion_id]);
        } else {
            return $this->renderAjax('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing RamaHasCaracterizacion model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $Rama_id
     * @param integer $Caracterizacion_id
     * @return mixed
     */
    public function actionUpdate($Rama_id, $Caracterizacion_id)
    {
        $model = $this->findModel($Rama_id, $Caracterizacion_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Rama_id' => $model->Rama_id, 'Caracterizacion_id' => $model->Caracterizacion_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing RamaHasCaracterizacion model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $Rama_id
     * @param integer $Caracterizacion_id
     * @return mixed
     */
    public function actionDelete($Rama_id, $Caracterizacion_id)
    {
        $this->findModel($Rama_id, $Caracterizacion_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the RamaHasCaracterizacion model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $Rama_id
     * @param integer $Caracterizacion_id
     * @return RamaHasCaracterizacion the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Rama_id, $Caracterizacion_id)
    {
        if (($model = RamaHasCaracterizacion::findOne(['Rama_id' => $Rama_id, 'Caracterizacion_id' => $Caracterizacion_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
