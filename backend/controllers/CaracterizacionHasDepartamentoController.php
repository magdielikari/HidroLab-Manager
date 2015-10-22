<?php

namespace backend\controllers;

use Yii;
use common\models\CaracterizacionHasDepartamento;
use common\models\search\CaracterizacionHasDepartamentoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\forbiddenHttpException;

/**
 * CaracterizacionHasDepartamentoController implements the CRUD actions for CaracterizacionHasDepartamento model.
 */
class CaracterizacionHasDepartamentoController extends Controller
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
     * Lists all CaracterizacionHasDepartamento models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CaracterizacionHasDepartamentoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CaracterizacionHasDepartamento model.
     * @param integer $Caracterizacion_id
     * @param integer $Departamento_id
     * @return mixed
     */
    public function actionView($Caracterizacion_id, $Departamento_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($Caracterizacion_id, $Departamento_id),
        ]);
    }

    /**
     * Creates a new CaracterizacionHasDepartamento model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new CaracterizacionHasDepartamento();

        if ($model->load(Yii::$app->request->post())) {
            $model->save();
            return $this->redirect(['view', 'Caracterizacion_id' => $model->Caracterizacion_id, 'Departamento_id' => $model->Departamento_id]);
        } else {
            return $this->renderAjax('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing CaracterizacionHasDepartamento model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $Caracterizacion_id
     * @param integer $Departamento_id
     * @return mixed
     */
    public function actionUpdate($Caracterizacion_id, $Departamento_id)
    {
        $model = $this->findModel($Caracterizacion_id, $Departamento_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Caracterizacion_id' => $model->Caracterizacion_id, 'Departamento_id' => $model->Departamento_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing CaracterizacionHasDepartamento model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $Caracterizacion_id
     * @param integer $Departamento_id
     * @return mixed
     */
    public function actionDelete($Caracterizacion_id, $Departamento_id)
    {
        $this->findModel($Caracterizacion_id, $Departamento_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the CaracterizacionHasDepartamento model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $Caracterizacion_id
     * @param integer $Departamento_id
     * @return CaracterizacionHasDepartamento the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Caracterizacion_id, $Departamento_id)
    {
        if (($model = CaracterizacionHasDepartamento::findOne(['Caracterizacion_id' => $Caracterizacion_id, 'Departamento_id' => $Departamento_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
