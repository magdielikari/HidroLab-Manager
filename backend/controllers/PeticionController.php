<?php

namespace backend\controllers;

use Yii;
use common\models\Peticion;
use common\models\search\PeticionSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\forbiddenHttpException;
use yii\web\UnauthorizedHttpException;

/**
 * PeticionController implements the CRUD actions for Peticion model.
 */
class PeticionController extends Controller
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
     * Lists all Peticion models.
     * @return mixed
     */
    public function actionIndex()
    {
        if(Yii::$app->user->can('peticion-index'))
        {    
            $searchModel = new PeticionSearch();
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
        if(Yii::$app->user->can('peticion-select'))
        {    
            $searchModel = new PeticionSearch();
            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
            return $this->renderAjax('select', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
            ]);
        }
        else
            throw new UnauthorizedHttpException(Yii::t('app', 'You are not authorized to access this view.'));
    }
    /**
     * Displays a single Peticion model.
     * @param string $id
     * @param string $Referencia_id
     * @param string $General_id
     * @param string $Muestras_id
     * @return mixed
     */
    public function actionView($id, $Referencia_id, $General_id, $Muestras_id)
    {
        if(Yii::$app->user->can('peticion-view'))
        {    
            return $this->render('view', [
                'model' => $this->findModel($id, $Referencia_id, $General_id, $Muestras_id),
            ]);
        }
        else
            throw new UnauthorizedHttpException(Yii::t('app', 'You are not authorized to access this view.'));
    }

    /**
     * Creates a new Peticion model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if(Yii::$app->user->can('peticion-create'))
        {    
            $model = new Peticion();
            if ($model->load(Yii::$app->request->post())) {
                $model->save();
                return $this->redirect(['view', 'id' => $model->id, 'Referencia_id' => $model->Referencia_id, 'General_id' => $model->General_id, 'Muestras_id' => $model->Muestras_id]);
            } else {
                return $this->renderAjax('create', [
                    'model' => $model,
                ]);
            }
        }
        else
            throw new UnauthorizedHttpException(Yii::t('app', 'You are not authorized to access this view.'));
    }

    public function actionEstablish()
    {
        if(Yii::$app->user->can('peticion-establish'))
        {    
            $model = new Peticion();
            if ($model->load(Yii::$app->request->post())) {
                $model->save();
                return $this->redirect(['view', 'id' => $model->id, 'Referencia_id' => $model->Referencia_id, 'General_id' => $model->General_id, 'Muestras_id' => $model->Muestras_id]);
            } else {
                return $this->renderAjax('establish', [
                    'model' => $model,
                ]);
            }
        }
        else
            throw new UnauthorizedHttpException(Yii::t('app', 'You are not authorized to access this view.'));
    }

    public function actionGenerate()
    {
        if(Yii::$app->user->can('peticion-generate'))
        {
            return $this->render('generate');
        }
        else
            throw new UnauthorizedHttpException(Yii::t('app', 'You are not authorized to access this view.'));
    }


    /**
     * Updates an existing Peticion model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @param string $Referencia_id
     * @param string $General_id
     * @param string $Muestras_id
     * @return mixed
     */
    public function actionUpdate($id, $Referencia_id, $General_id, $Muestras_id)
    {
        if(Yii::$app->user->can('peticion-update'))
        {    
            $model = $this->findModel($id, $Referencia_id, $General_id, $Muestras_id);
            if ($model->load(Yii::$app->request->post())) {
                $model->save();
                return $this->redirect(['view', 'id' => $model->id, 'Referencia_id' => $model->Referencia_id, 'General_id' => $model->General_id, 'Muestras_id' => $model->Muestras_id]);
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
     * Deletes an existing Peticion model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @param string $Referencia_id
     * @param string $General_id
     * @param string $Muestras_id
     * @return mixed
     */
    public function actionDelete($id, $Referencia_id, $General_id, $Muestras_id)
    {
        if(Yii::$app->user->can('peticion-delete'))
        {    
            $this->findModel($id, $Referencia_id, $General_id, $Muestras_id)->delete();
            return $this->redirect(['index']);
        }
        else
            throw new UnauthorizedHttpException(Yii::t('app', 'You are not authorized to access this view.'));
    }

    public function actionAjaxCookie()
    {
        $requestCookies = Yii::$app->request->cookies;
        $data = Yii::$app->request->get();

        switch($data['action'])
        {
            case 'check':
                if($requestCookies->has($data['name']))
                {
                    if($requestCookies->get($data['name'])->value['cliente'])
                        return json_encode(true);

                    return json_encode(false);
                }

                else
                {
                    $cookies = Yii::$app->response->cookies;

                    $cookies->add(new \yii\web\Cookie([
                        'name' => $data['name'],
                        'expire'=>time() + (86400 * 30),
                        'value' =>[
                            'cliente'=>null,
                            'general'=>null,
                            'tipos'=>null,
                            'subTipos'=>[],
                            'ramas'=>[],
                            'parametros'=>[],
                            'muestras'=>[],
                            'equipos'=>[],
                            'costoMuestra'=>[],
                            'costoParametro'=>[],
                            'peticion'=>null
                        ]
                    ]));

                    return json_encode(false);
                }
                break;

            case 'delete':
                $cookies = Yii::$app->response->cookies;

                $cookies->remove($data['name']);
                break;

            case 'verify':
                return json_encode(['data'=>Yii::$app->response->cookies->has('cliente')]);
                break;
        }
        
        return json_encode($data);
    }

    /**
     * Finds the Peticion model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @param string $Referencia_id
     * @param string $General_id
     * @param string $Muestras_id
     * @return Peticion the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $Referencia_id, $General_id, $Muestras_id)
    {
        if (($model = Peticion::findOne(['id' => $id, 'Referencia_id' => $Referencia_id, 'General_id' => $General_id, 'Muestras_id' => $Muestras_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
