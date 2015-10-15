<?php

namespace backend\controllers;

use Yii;
use common\models\CostoParametro;
use common\models\search\CostoParametroSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CostoParametroController implements the CRUD actions for CostoParametro model.
 */
class CostoParametroController extends Controller
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
     * Lists all CostoParametro models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CostoParametroSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CostoParametro model.
     * @param string $id
     * @param string $Parametros_id
     * @return mixed
     */
    public function actionView($id, $Parametros_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $Parametros_id),
        ]);
    }

    /**
     * Creates a new CostoParametro model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new CostoParametro();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'Parametros_id' => $model->Parametros_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing CostoParametro model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @param string $Parametros_id
     * @return mixed
     */
    public function actionUpdate($id, $Parametros_id)
    {
        $model = $this->findModel($id, $Parametros_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'Parametros_id' => $model->Parametros_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing CostoParametro model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @param string $Parametros_id
     * @return mixed
     */
    public function actionDelete($id, $Parametros_id)
    {
        $this->findModel($id, $Parametros_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the CostoParametro model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @param string $Parametros_id
     * @return CostoParametro the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $Parametros_id)
    {
        if (($model = CostoParametro::findOne(['id' => $id, 'Parametros_id' => $Parametros_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
