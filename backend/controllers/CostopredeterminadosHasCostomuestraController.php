<?php

namespace backend\controllers;

use Yii;
use common\models\CostopredeterminadosHasCostomuestra;
use common\models\search\CostopredeterminadosHasCostomuestraSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\forbiddenHttpException;

/**
 * CostopredeterminadosHasCostomuestraController implements the CRUD actions for CostopredeterminadosHasCostomuestra model.
 */
class CostopredeterminadosHasCostomuestraController extends Controller
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
     * Lists all CostopredeterminadosHasCostomuestra models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CostopredeterminadosHasCostomuestraSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionSelect()
    {
        $searchModel = new CostopredeterminadosHasCostomuestraSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->renderAjax('select', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }


    /**
     * Displays a single CostopredeterminadosHasCostomuestra model.
     * @param string $CostoPredeterminados_id
     * @param string $CostoMuestra_id
     * @return mixed
     */
    public function actionView($CostoPredeterminados_id, $CostoMuestra_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($CostoPredeterminados_id, $CostoMuestra_id),
        ]);
    }

    /**
     * Creates a new CostopredeterminadosHasCostomuestra model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new CostopredeterminadosHasCostomuestra();

        if ($model->load(Yii::$app->request->post())) {
            $model->save();
            return $this->redirect(['view', 'CostoPredeterminados_id' => $model->CostoPredeterminados_id, 'CostoMuestra_id' => $model->CostoMuestra_id]);
        } else {
            return $this->renderAjax('create', [
                'model' => $model,
            ]);
        }
    }

    public function actionEstablish()
    {
        $model = new CostopredeterminadosHasCostomuestra();

        if ($model->load(Yii::$app->request->post())) {
            $model->save();
            return $this->redirect(['view', 'CostoPredeterminados_id' => $model->CostoPredeterminados_id, 'CostoMuestra_id' => $model->CostoMuestra_id]);
        } else {
            return $this->renderAjax('establish', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing CostopredeterminadosHasCostomuestra model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $CostoPredeterminados_id
     * @param string $CostoMuestra_id
     * @return mixed
     */
    public function actionUpdate($CostoPredeterminados_id, $CostoMuestra_id)
    {
        $model = $this->findModel($CostoPredeterminados_id, $CostoMuestra_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'CostoPredeterminados_id' => $model->CostoPredeterminados_id, 'CostoMuestra_id' => $model->CostoMuestra_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing CostopredeterminadosHasCostomuestra model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $CostoPredeterminados_id
     * @param string $CostoMuestra_id
     * @return mixed
     */
    public function actionDelete($CostoPredeterminados_id, $CostoMuestra_id)
    {
        $this->findModel($CostoPredeterminados_id, $CostoMuestra_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the CostopredeterminadosHasCostomuestra model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $CostoPredeterminados_id
     * @param string $CostoMuestra_id
     * @return CostopredeterminadosHasCostomuestra the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($CostoPredeterminados_id, $CostoMuestra_id)
    {
        if (($model = CostopredeterminadosHasCostomuestra::findOne(['CostoPredeterminados_id' => $CostoPredeterminados_id, 'CostoMuestra_id' => $CostoMuestra_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
