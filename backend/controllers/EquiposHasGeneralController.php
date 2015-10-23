<?php

namespace backend\controllers;

use Yii;
use common\models\EquiposHasGeneral;
use common\models\search\EquiposHasGeneralSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\forbiddenHttpException;

/**
 * EquiposHasGeneralController implements the CRUD actions for EquiposHasGeneral model.
 */
class EquiposHasGeneralController extends Controller
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
     * Lists all EquiposHasGeneral models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new EquiposHasGeneralSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->renderAjax('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single EquiposHasGeneral model.
     * @param integer $Equipos_id
     * @param string $General_id
     * @return mixed
     */
    public function actionView($Equipos_id, $General_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($Equipos_id, $General_id),
        ]);
    }

    /**
     * Creates a new EquiposHasGeneral model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new EquiposHasGeneral();

        if ($model->load(Yii::$app->request->post())) {
            $model->save();
            return $this->redirect(['view', 'Equipos_id' => $model->Equipos_id, 'General_id' => $model->General_id]);
        } else {
            return $this->renderAjax('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing EquiposHasGeneral model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $Equipos_id
     * @param string $General_id
     * @return mixed
     */
    public function actionUpdate($Equipos_id, $General_id)
    {
        $model = $this->findModel($Equipos_id, $General_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Equipos_id' => $model->Equipos_id, 'General_id' => $model->General_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing EquiposHasGeneral model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $Equipos_id
     * @param string $General_id
     * @return mixed
     */
    public function actionDelete($Equipos_id, $General_id)
    {
        $this->findModel($Equipos_id, $General_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the EquiposHasGeneral model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $Equipos_id
     * @param string $General_id
     * @return EquiposHasGeneral the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Equipos_id, $General_id)
    {
        if (($model = EquiposHasGeneral::findOne(['Equipos_id' => $Equipos_id, 'General_id' => $General_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
