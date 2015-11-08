<?php

namespace backend\controllers;

use Yii;
use common\models\ParametrosHasMuestras;
use common\models\search\ParametrosHasMuestrasSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ParametrosHasMuestrasController implements the CRUD actions for ParametrosHasMuestras model.
 */
class ParametrosHasMuestrasController extends Controller
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
     * Lists all ParametrosHasMuestras models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ParametrosHasMuestrasSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ParametrosHasMuestras model.
     * @param string $Parametros_id
     * @param string $Muestras_id
     * @return mixed
     */
    public function actionView($Parametros_id, $Muestras_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($Parametros_id, $Muestras_id),
        ]);
    }

    /**
     * Creates a new ParametrosHasMuestras model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ParametrosHasMuestras();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Parametros_id' => $model->Parametros_id, 'Muestras_id' => $model->Muestras_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ParametrosHasMuestras model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $Parametros_id
     * @param string $Muestras_id
     * @return mixed
     */
    public function actionUpdate($Parametros_id, $Muestras_id)
    {
        $model = $this->findModel($Parametros_id, $Muestras_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Parametros_id' => $model->Parametros_id, 'Muestras_id' => $model->Muestras_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ParametrosHasMuestras model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $Parametros_id
     * @param string $Muestras_id
     * @return mixed
     */
    public function actionDelete($Parametros_id, $Muestras_id)
    {
        $this->findModel($Parametros_id, $Muestras_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ParametrosHasMuestras model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $Parametros_id
     * @param string $Muestras_id
     * @return ParametrosHasMuestras the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Parametros_id, $Muestras_id)
    {
        if (($model = ParametrosHasMuestras::findOne(['Parametros_id' => $Parametros_id, 'Muestras_id' => $Muestras_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
