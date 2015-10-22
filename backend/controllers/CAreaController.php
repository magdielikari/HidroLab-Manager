<?php

namespace backend\controllers;

use Yii;
use common\models\CArea;
use common\models\search\CAreaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\forbiddenHttpException;

/**
 * CAreaController implements the CRUD actions for CArea model.
 */
class CAreaController extends Controller
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
     * Lists all CArea models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CAreaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CArea model.
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
     * Creates a new CArea model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new CArea();

        if ($model->load(Yii::$app->request->post())) {
            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);//, 'Celular_id' => $model->Celular_id]);
        } else {
            return $this->renderAjax('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing CArea model.
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
     * Deletes an existing CArea model.
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
     * Finds the CArea model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param string $Celular_id
     * @return CArea the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $Celular_id)
    {
        if (($model = CArea::findOne(['id' => $id, 'Celular_id' => $Celular_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
