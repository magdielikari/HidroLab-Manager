<?php

namespace backend\controllers;

use Yii;
use common\models\DecretoHasTipo;
use common\models\search\DecretoHasTipoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\forbiddenHttpException;
use yii\web\UnauthorizedHttpException;

/**
 * DecretoHasTipoController implements the CRUD actions for DecretoHasTipo model.
 */
class DecretoHasTipoController extends Controller
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
     * Lists all DecretoHasTipo models.
     * @return mixed
     */
    public function actionIndex()
    {
        if(Yii::$app->user->can('decretoHasTipo-index'))
        {    
            $searchModel = new DecretoHasTipoSearch();
            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

            return $this->render('index', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
            ]);
        }
        else
            throw new UnauthorizedHttpException(Yii::t('app', 'You are not authorized to access this view.'));
    }

    public function actionSelect()
    {
        $searchModel = new DecretoHasTipoSearch();
        $dataProvider = $searchModel->search(['DecretoHasTipoSearch'=>Yii::$app->request->queryParams]);

        return $this->renderAjax('select', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DecretoHasTipo model.
     * @param integer $Decreto_id
     * @param integer $Tipo_id
     * @return mixed
     */
    public function actionView($Decreto_id, $Tipo_id)
    {
        if(Yii::$app->user->can('decretoHasTipo-view'))
        {    
            return $this->render('view', [
                'model' => $this->findModel($Decreto_id, $Tipo_id),
            ]);
        }
        else
            throw new UnauthorizedHttpException(Yii::t('app', 'You are not authorized to access this view.'));
    }

    /**
     * Creates a new DecretoHasTipo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if(Yii::$app->user->can('decretoHasTipo-create'))
        {    
            $model = new DecretoHasTipo();
            if ($model->load(Yii::$app->request->post())) {
                $model->save();
                return $this->redirect(['view', 'Decreto_id' => $model->Decreto_id, 'Tipo_id' => $model->Tipo_id]);
            } else {
                return $this->renderAjax('create', [
                    'model' => $model,
                ]);
            }
        }
        else
            throw new UnauthorizedHttpException(Yii::t('app', 'You are not authorized to access this view.'));
    }

    /**
     * Updates an existing DecretoHasTipo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $Decreto_id
     * @param integer $Tipo_id
     * @return mixed
     */
    public function actionUpdate($Decreto_id, $Tipo_id)
    {
        if(Yii::$app->user->can('decretoHasTipo-update'))
        {    
            $model = $this->findModel($Decreto_id, $Tipo_id);
            if ($model->load(Yii::$app->request->post())) {
                $model->save();
                return $this->redirect(['view', 'Decreto_id' => $model->Decreto_id, 'Tipo_id' => $model->Tipo_id]);
            } else {
                return $this->renderAjax('update', [
                    'model' => $model,
                ]);
            }
        }
        else
            throw new UnauthorizedHttpException(Yii::t('app', 'You are not authorized to access this view.'));
    }

    /**
     * Deletes an existing DecretoHasTipo model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $Decreto_id
     * @param integer $Tipo_id
     * @return mixed
     */
    public function actionDelete($Decreto_id, $Tipo_id)
    {
        if(Yii::$app->user->can('decretoHasTipo-delete'))
        {    
            $this->findModel($Decreto_id, $Tipo_id)->delete();
            return $this->redirect(['index']);
        }
        else
            throw new UnauthorizedHttpException(Yii::t('app', 'You are not authorized to access this view.'));
    }

    /**
     * Finds the DecretoHasTipo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $Decreto_id
     * @param integer $Tipo_id
     * @return DecretoHasTipo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Decreto_id, $Tipo_id)
    {
        if (($model = DecretoHasTipo::findOne(['Decreto_id' => $Decreto_id, 'Tipo_id' => $Tipo_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
