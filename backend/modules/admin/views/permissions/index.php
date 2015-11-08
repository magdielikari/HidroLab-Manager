<?php
use yii\bootstrap\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use common\widgets\Thumbnail;

$this->title = Yii::t('app', 'Permissions');
$this->params['breadcrumbs'][] = ['label'=>Yii::t('app', 'Admin'), 'url'=>['main/index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="role-index">
    <h1><?= Html::encode($this->title) ?></h1>

    <?= HTml::a(Yii::t('app', 'Create permission'), ['create'], ['class'=>'btn btn-success']) ?>
    <?= HTml::a(Yii::t('app', 'Assign permission'), ['assign'], ['class'=>'btn btn-success']) ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            'description',
            [  
                'label'=>'Created at',
                'value'=>function($model, $key, $index){
                    if($model->createdAt)
                        return date('Y-m-d H:i', $model->createdAt);
                }
            ],
            [  
                'label'=>'Updated at',
                'value'=>function($model, $key, $index){
                    if($model->updatedAt)
                        return date('Y-m-d H:i', $model->updatedAt);
                }
            ],

            [
                'class' => 'yii\grid\ActionColumn',
                'template'=>'{update}{delete}',
                'buttons'=>[
                    'update'=>function($url, $model){
                        $url = Url::to(['update', 'name'=>$model->name]);

                        return Html::a(Html::icon('pencil'), $url);
                    },
                    'delete'=>function($url, $model){
                        $url = Url::to(['delete', 'name'=>$model->name]);
                        
                        return Html::a(Html::icon('trash'), $url, [
                            'data-pjax'=>0,
                            'data-method'=>'post',
                            'data-confirm'=>Yii::t('app', 'Are you sure you want to delete this item?'),
                            'aria-label'=>'Delete',
                            'title'=>'Delete'
                        ]);
                    }
                ]
            ],
        ],
    ]); ?>

</div>