<?php

namespace backend\controllers;

use Yii;
use common\models\DepartamentoHasDecreto;
use common\models\search\DepartamentoHasDecretoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DepartamentoHasDecretoController implements the CRUD actions for DepartamentoHasDecreto model.
 */
class DepartamentoHasDecretoController extends Controller
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
     * Lists all DepartamentoHasDecreto models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DepartamentoHasDecretoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DepartamentoHasDecreto model.
     * @param integer $Departamento_id
     * @param integer $Decreto_id
     * @return mixed
     */
    public function actionView($Departamento_id, $Decreto_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($Departamento_id, $Decreto_id),
        ]);
    }

    /**
     * Creates a new DepartamentoHasDecreto model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new DepartamentoHasDecreto();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Departamento_id' => $model->Departamento_id, 'Decreto_id' => $model->Decreto_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing DepartamentoHasDecreto model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $Departamento_id
     * @param integer $Decreto_id
     * @return mixed
     */
    public function actionUpdate($Departamento_id, $Decreto_id)
    {
        $model = $this->findModel($Departamento_id, $Decreto_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Departamento_id' => $model->Departamento_id, 'Decreto_id' => $model->Decreto_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing DepartamentoHasDecreto model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $Departamento_id
     * @param integer $Decreto_id
     * @return mixed
     */
    public function actionDelete($Departamento_id, $Decreto_id)
    {
        $this->findModel($Departamento_id, $Decreto_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the DepartamentoHasDecreto model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $Departamento_id
     * @param integer $Decreto_id
     * @return DepartamentoHasDecreto the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Departamento_id, $Decreto_id)
    {
        if (($model = DepartamentoHasDecreto::findOne(['Departamento_id' => $Departamento_id, 'Decreto_id' => $Decreto_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
