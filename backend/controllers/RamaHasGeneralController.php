<?php

namespace backend\controllers;

use Yii;
use common\models\RamaHasGeneral;
use common\models\search\RamaHasGeneralSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\forbiddenHttpException;

/**
 * RamaHasGeneralController implements the CRUD actions for RamaHasGeneral model.
 */
class RamaHasGeneralController extends Controller
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
     * Lists all RamaHasGeneral models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new RamaHasGeneralSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionSelect()
    {
        $searchModel = new RamaHasGeneralSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->renderAjax('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single RamaHasGeneral model.
     * @param string $Rama_id
     * @param string $General_id
     * @return mixed
     */
    public function actionView($Rama_id, $General_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($Rama_id, $General_id),
        ]);
    }

    /**
     * Creates a new RamaHasGeneral model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new RamaHasGeneral();

        if ($model->load(Yii::$app->request->post())) {
            $model->save();
            return $this->redirect(['view', 'Rama_id' => $model->Rama_id, 'General_id' => $model->General_id]);
        } else {
            return $this->renderAjax('create', [
                'model' => $model,
            ]);
        }
    }

    public function actionEstablish()
    {
        $model = new RamaHasGeneral();

        if ($model->load(Yii::$app->request->post())) {
            $model->save();
            return $this->redirect(['view', 'Rama_id' => $model->Rama_id, 'General_id' => $model->General_id]);
        } else {
            return $this->renderAjax('establish', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing RamaHasGeneral model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $Rama_id
     * @param string $General_id
     * @return mixed
     */
    public function actionUpdate($Rama_id, $General_id)
    {
        $model = $this->findModel($Rama_id, $General_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Rama_id' => $model->Rama_id, 'General_id' => $model->General_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing RamaHasGeneral model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $Rama_id
     * @param string $General_id
     * @return mixed
     */
    public function actionDelete($Rama_id, $General_id)
    {
        $this->findModel($Rama_id, $General_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the RamaHasGeneral model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $Rama_id
     * @param string $General_id
     * @return RamaHasGeneral the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Rama_id, $General_id)
    {
        if (($model = RamaHasGeneral::findOne(['Rama_id' => $Rama_id, 'General_id' => $General_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
