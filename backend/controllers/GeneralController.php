<?php

namespace backend\controllers;

use Yii;
use common\models\General;
use common\models\search\GeneralSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Url;

/**
 * GeneralController implements the CRUD actions for General model.
 */
class GeneralController extends Controller
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
     * Lists all General models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new GeneralSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionSelect()
    {
        $searchModel = new GeneralSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->renderAjax('select', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }


    /**
     * Displays a single General model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->renderAjax('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionAjaxView($id)
    {
        return $this->renderAjax('ajaxView', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new General model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new General();
        $data=[
            'url'=>null,
            'success'=>false,
            'error'=>[]
        ];
        if ($model->load(Yii::$app->request->post())) {
            if($model->save()){
                $data['success']=true;
                $data['url']=Url::to(['general/view','id'=>$model->id]);
            }else{
                $data['error'][]=$model->getErrors();    
            }
            header('Content-type:application/json');
            echo json_encode($data);
            Yii::$app->end();
        } else {
            return $this->renderAjax('create', [
                'model' => $model,
            ]);
        }
    }

    public function actionEstablish()
    {
        $model = new General();
        $data=[
            'url'=>null,
            'success'=>false,
            'error'=>[]
        ];
        if ($model->load(Yii::$app->request->post())) {
            if($model->save()){
                $data['success']=true;
                $data['url']=Url::to(['general/view','id'=>$model->id]);
            }else{
                $data['error'][]=$model->getErrors();    
            }
            header('Content-type:application/json');
            echo json_encode($data);
            Yii::$app->end();
        } else {
            return $this->renderAjax('establish', [
                'model' => $model,
            ]);
        }
    }


    /**
     * Updates an existing General model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->renderAjax('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing General model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the General model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return General the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = General::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
