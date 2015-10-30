<?php

namespace backend\controllers;

use Yii;
use common\models\Carea;
use common\models\search\CareaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CareaController implements the CRUD actions for Carea model.
 */
class CareaController extends Controller
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
     * Lists all Carea models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CareaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Carea model.
     * @param integer $id
     * @param string $Celular_id
     * @return mixed
     */
    public function actionView($id, $Celular_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $Celular_id),
        ]);
    }

    /**
     * Creates a new Carea model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Carea();

        if ($model->load(Yii::$app->request->post())) {
            $model->save();
            return $this->redirect(['view', 'id' => $model->id, 'Celular_id' => $model->Celular_id]);
        } else {
            return $this->renderAjax('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Carea model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @param string $Celular_id
     * @return mixed
     */
    public function actionUpdate($id, $Celular_id)
    {
        $model = $this->findModel($id, $Celular_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'Celular_id' => $model->Celular_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Carea model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @param string $Celular_id
     * @return mixed
     */
    public function actionDelete($id, $Celular_id)
    {
        $this->findModel($id, $Celular_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Carea model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param string $Celular_id
     * @return Carea the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $Celular_id)
    {
        if (($model = Carea::findOne(['id' => $id, 'Celular_id' => $Celular_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
