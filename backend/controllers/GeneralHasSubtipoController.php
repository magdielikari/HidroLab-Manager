<?php

namespace backend\controllers;

use Yii;
use common\models\GeneralHasSubtipo;
use common\models\search\GeneralHasSubtipoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * GeneralHasSubtipoController implements the CRUD actions for GeneralHasSubtipo model.
 */
class GeneralHasSubtipoController extends Controller
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
     * Lists all GeneralHasSubtipo models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new GeneralHasSubtipoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionSelect()
    {
        $searchModel = new GeneralHasSubtipoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->renderAjax('select', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single GeneralHasSubtipo model.
     * @param string $General_id
     * @param integer $SubTipo_id
     * @return mixed
     */
    public function actionView($General_id, $SubTipo_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($General_id, $SubTipo_id),
        ]);
    }

    /**
     * Creates a new GeneralHasSubtipo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new GeneralHasSubtipo();

        if ($model->load(Yii::$app->request->post())) {
            $model->save();
            return $this->redirect(['view', 'General_id' => $model->General_id, 'SubTipo_id' => $model->SubTipo_id]);
        } else {
            return $this->renderAjax('create', [
                'model' => $model,
            ]);
        }
    }

        public function actionEstablish()
    {
        $model = new GeneralHasSubtipo();

        if ($model->load(Yii::$app->request->post())) {
            $model->save();
            return $this->redirect(['view', 'General_id' => $model->General_id, 'SubTipo_id' => $model->SubTipo_id]);
        } else {
            return $this->renderAjax('establish', [
                'model' => $model,
            ]);
        }
    }


    /**
     * Updates an existing GeneralHasSubtipo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $General_id
     * @param integer $SubTipo_id
     * @return mixed
     */
    public function actionUpdate($General_id, $SubTipo_id)
    {
        $model = $this->findModel($General_id, $SubTipo_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'General_id' => $model->General_id, 'SubTipo_id' => $model->SubTipo_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing GeneralHasSubtipo model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $General_id
     * @param integer $SubTipo_id
     * @return mixed
     */
    public function actionDelete($General_id, $SubTipo_id)
    {
        $this->findModel($General_id, $SubTipo_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the GeneralHasSubtipo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $General_id
     * @param integer $SubTipo_id
     * @return GeneralHasSubtipo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($General_id, $SubTipo_id)
    {
        if (($model = GeneralHasSubtipo::findOne(['General_id' => $General_id, 'SubTipo_id' => $SubTipo_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
