<?php 

use yii\helpers\Html;
use yii\widgets\Pjax;
use yii\bootstrap\Modal;
use yii\helpers\Url;
	
$this->title = Yii::t('models', 'Crear Peticion');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Peticion'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
 <div class="col-sm-6 col-md-4">
  <div class="thumbnail">
 	<img class="glyphicon glyphicon-search"></img>
  <div class="caption">
	<h3>Datos Generales</h3>
	<p>	
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
	Quam dolore numquam mollitia voluptatem rem nobis asperiores 
	animi est voluptas recusandae a labore deleniti nihil enim, 
	maxime id nesciunt. Minima, porro.
	</p>
	<p>
   	<p>
     <?= Html::button(Yii::t('models', 'Create Peticion'), ['value'=>Url::to(['general/create']),
     'class' => 'btn btn-success modalButton', 'data-title'=>'Create Peticion']) ?>
    </p>
   
	<a href="#" class="btn btn-default" role="button">button</a>
	</p>
   </div>
  </div>		
 </div>

 <div class="col-sm-6 col-md-4">
  <div class="thumbnail">
  <img class="glyphicon glyphicon-search"></img>
  <div class="caption">
  <h3>Datos Generales</h3>
  <p> 
  Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
  Quam dolore numquam mollitia voluptatem rem nobis asperiores 
  animi est voluptas recusandae a labore deleniti nihil enim, 
  maxime id nesciunt. Minima, porro.
  </p>
  <p>
    <p>
     <?= Html::button(Yii::t('models', 'Create Peticion'), ['value'=>Url::to('create'),
     'class' => 'btn btn-success modalButton']) ?>
    </p>

  <a href="#" class="btn btn-default" role="button">button</a>
  </p>
   </div>
  </div>    
 </div>

 <div class="col-sm-6 col-md-4">
  <div class="thumbnail">
  <img class="glyphicon glyphicon-search"></img>
  <div class="caption">
  <h3>Datos Generales</h3>
  <p> 
  Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
  Quam dolore numquam mollitia voluptatem rem nobis asperiores 
  animi est voluptas recusandae a labore deleniti nihil enim, 
  maxime id nesciunt. Minima, porro.
  </p>
  <p>
    <p>
     <?= Html::button(Yii::t('models', 'Create Peticion'), ['value'=>Url::to('create'),
     'class' => 'btn btn-success modalButton']) ?>
    </p>
  <a href="#" class="btn btn-default" role="button">button</a>
  </p>
   </div>
  </div>    
 </div>
</div>

<!------------------------------------------------------------------------------ -->

<div class="row">
 <div class="col-sm-6 col-md-4">
  <div class="thumbnail">
  <img class="glyphicon glyphicon-search"></img>
  <div class="caption">
  <h3>Datos Generales</h3>
  <p> 
  Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
  Quam dolore numquam mollitia voluptatem rem nobis asperiores 
  animi est voluptas recusandae a labore deleniti nihil enim, 
  maxime id nesciunt. Minima, porro.
  </p>
  <p>
    <p>
     <?= Html::button(Yii::t('models', 'Create Peticion'), ['value'=>Url::to('create'),
     'class' => 'btn btn-success modalButton']) ?>
    </p>
  
  <a href="#" class="btn btn-default" role="button">button</a>
  </p>
   </div>
  </div>    
 </div>

 <div class="col-sm-6 col-md-4">
  <div class="thumbnail">
  <img class="glyphicon glyphicon-search"></img>
  <div class="caption">
  <h3>Datos Generales</h3>
  <p> 
  Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
  Quam dolore numquam mollitia voluptatem rem nobis asperiores 
  animi est voluptas recusandae a labore deleniti nihil enim, 
  maxime id nesciunt. Minima, porro.
  </p>
  <p>
    <p>
     <?= Html::button(Yii::t('models', 'Create Peticion'), ['value'=>Url::to('create'),
     'class' => 'btn btn-success modalButton']) ?>
    </p>
 
  <a href="#" class="btn btn-default" role="button">button</a>
  </p>
   </div>
  </div>    
 </div>

 <div class="col-sm-6 col-md-4">
  <div class="thumbnail">
  <img class="glyphicon glyphicon-search"></img>
  <div class="caption">
  <h3>Datos Generales</h3>
  <p> 
  Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
  Quam dolore numquam mollitia voluptatem rem nobis asperiores 
  animi est voluptas recusandae a labore deleniti nihil enim, 
  maxime id nesciunt. Minima, porro.
  </p>
  <p>
    <p>
     <?= Html::button(Yii::t('models', 'Create Peticion'), ['value'=>Url::to('indice'),
     'class' => 'btn btn-success modalButton','data-title'=>'Create Peticion']) ?>
    </p>

  <a href="#" class="btn btn-default" role="button">button</a>
  </p>
   </div>
  </div>    
 </div> 
</div>

archivo...
    <?php
     Modal::begin([
    'header'=>'<h2 class="modal-title"></h2>',
        'id'=>'modal',
        'size'=>'modal-lg',
        ]);
      echo "<div id='modalContent'></div>";
      Modal::end();
    ?>    

