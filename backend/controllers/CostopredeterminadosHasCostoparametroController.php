<?php

namespace backend\controllers;

use Yii;
use common\models\CostopredeterminadosHasCostoparametro;
use common\models\search\CostopredeterminadosHasCostoparametroSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\forbiddenHttpException;

/**
 * CostopredeterminadosHasCostoparametroController implements the CRUD actions for CostopredeterminadosHasCostoparametro model.
 */
class CostopredeterminadosHasCostoparametroController extends Controller
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
     * Lists all CostopredeterminadosHasCostoparametro models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CostopredeterminadosHasCostoparametroSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionSelect()
    {
        $searchModel = new CostopredeterminadosHasCostoparametroSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->renderAjax('select', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }


    /**
     * Displays a single CostopredeterminadosHasCostoparametro model.
     * @param string $CostoPredeterminados_id
     * @param string $CostoParametro_id
     * @return mixed
     */
    public function actionView($CostoPredeterminados_id, $CostoParametro_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($CostoPredeterminados_id, $CostoParametro_id),
        ]);
    }

    /**
     * Creates a new CostopredeterminadosHasCostoparametro model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new CostopredeterminadosHasCostoparametro();

        if ($model->load(Yii::$app->request->post())) {
            $model->save();
            return $this->redirect(['view', 'CostoPredeterminados_id' => $model->CostoPredeterminados_id, 'CostoParametro_id' => $model->CostoParametro_id]);
        } else {
            return $this->renderAjax('create', [
                'model' => $model,
            ]);
        }
    }

        public function actionEstablish()
    {
        $model = new CostopredeterminadosHasCostoparametro();

        if ($model->load(Yii::$app->request->post())) {
            $model->save();
            return $this->redirect(['view', 'CostoPredeterminados_id' => $model->CostoPredeterminados_id, 'CostoParametro_id' => $model->CostoParametro_id]);
        } else {
            return $this->renderAjax('establish', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing CostopredeterminadosHasCostoparametro model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $CostoPredeterminados_id
     * @param string $CostoParametro_id
     * @return mixed
     */
    public function actionUpdate($CostoPredeterminados_id, $CostoParametro_id)
    {
        $model = $this->findModel($CostoPredeterminados_id, $CostoParametro_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'CostoPredeterminados_id' => $model->CostoPredeterminados_id, 'CostoParametro_id' => $model->CostoParametro_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing CostopredeterminadosHasCostoparametro model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $CostoPredeterminados_id
     * @param string $CostoParametro_id
     * @return mixed
     */
    public function actionDelete($CostoPredeterminados_id, $CostoParametro_id)
    {
        $this->findModel($CostoPredeterminados_id, $CostoParametro_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the CostopredeterminadosHasCostoparametro model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $CostoPredeterminados_id
     * @param string $CostoParametro_id
     * @return CostopredeterminadosHasCostoparametro the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($CostoPredeterminados_id, $CostoParametro_id)
    {
        if (($model = CostopredeterminadosHasCostoparametro::findOne(['CostoPredeterminados_id' => $CostoPredeterminados_id, 'CostoParametro_id' => $CostoParametro_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
