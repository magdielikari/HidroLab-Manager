<?php 

use yii\helpers\Html;
use yii\widgets\Pjax;

use yii\helpers\Url;
	
$this->title = Yii::t('models', 'Crear Peticion');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Peticion'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
<?php echo $this->renderFile('@backend/views/herramientas/thu.php'); ?>
	<h3>Datos Generales</h3>
	<p>	
    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
	Quam dolore numquam mollitia voluptatem rem nobis asperiores 
	animi est voluptas recusandae a labore deleniti nihil enim, 
	maxime id nesciunt. Minima, porro.
	</p>
	<p>
   	 <?= Html::button(Yii::t('models', 'Seleccionar General'), ['value'=>Url::to(['general/index']),
     'class' => 'btn btn-success modalButton', 'data-title'=>'Seleccionar General']) ?>
     <?= Html::button(Yii::t('models', 'Crear General'), ['value'=>Url::to(['general/create']),
     'class' => 'btn btn-info modalButton', 'data-title'=>'Create General']) ?>
	</p>
   </div></div></div>

<?php echo $this->renderFile('@backend/views/herramientas/thu.php'); ?>
  <h3>Datos Muestra</h3>
  <p> 
  Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
  Quam dolore numquam mollitia voluptatem rem nobis asperiores 
  animi est voluptas recusandae a labore deleniti nihil enim, 
  maxime id nesciunt. Minima, porro.
  </p>
  <p>
    <?= Html::button(Yii::t('models', 'Seleccionar Muestra'), ['value'=>Url::to(['muestras/index']),
    'class' => 'btn btn-success modalButton', 'data-title'=>'Seleccionar Muestra']) ?>
    <?= Html::button(Yii::t('models', 'Crear Muestra'), ['value'=>Url::to(['muestras/create']),
    'class' => 'btn btn-success modalButton', 'data-title'=>'Crear Muestra']) ?>
  </p>
   </div></div></div>

<?php echo $this->renderFile('@backend/views/herramientas/thu.php'); ?>
  <h3>Datos Parametros</h3>
  <p> 
  Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
  Quam dolore numquam mollitia voluptatem rem nobis asperiores 
  animi est voluptas recusandae a labore deleniti nihil enim, 
  maxime id nesciunt. Minima, porro.
  </p>
  <p>
    <?= Html::button(Yii::t('models', 'Seleccionar Parametros'), ['value'=>Url::to(['parametros/index']),
    'class' => 'btn btn-success modalButton', 'data-title'=>'Create Parametros']) ?>
    <?= Html::button(Yii::t('models', 'Crear Parametros'), ['value'=>Url::to(['parametros/create']),
    'class' => 'btn btn-success modalButton', 'data-title'=>'Create Parametros']) ?>
  </p>
   </div></div></div></div>

<!------------------------------------------------------------------------------ -->

<div class="row">

<?php echo $this->renderFile('@backend/views/herramientas/thu.php'); ?>
  <h3>Datos Equipos-has-Generales</h3>
  <p> 
  Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
  Quam dolore numquam mollitia voluptatem rem nobis asperiores 
  animi est voluptas recusandae a labore deleniti nihil enim, 
  maxime id nesciunt. Minima, porro.
  </p>
  <p>
    <?= Html::button(Yii::t('models', 'Seleccionar Muestra'), ['value'=>Url::to(['equipos-has-general/index']),
    'class' => 'btn btn-success modalButton', 'data-title'=>'Seleccionar Muestra']) ?>
    <?= Html::button(Yii::t('models', 'Crear Muestra'), ['value'=>Url::to(['equipos-has-general/create']),
    'class' => 'btn btn-success modalButton', 'data-title'=>'Crear Muestra']) ?>
  </p>
   </div></div></div>

 
<?php echo $this->renderFile('@backend/views/herramientas/thu.php'); ?>
  <h3>Datos Rama-has-Generals</h3>
  <p> 
  Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
  Quam dolore numquam mollitia voluptatem rem nobis asperiores 
  animi est voluptas recusandae a labore deleniti nihil enim, 
  maxime id nesciunt. Minima, porro.
  </p>
  <p>
    <?= Html::button(Yii::t('models', 'Seleccionar Muestra'), ['value'=>Url::to(['rama-has-general/index']),
    'class' => 'btn btn-success modalButton', 'data-title'=>'Seleccionar Muestra']) ?>
    <?= Html::button(Yii::t('models', 'Crear Muestra'), ['value'=>Url::to(['rama-has-general/create']),
    'class' => 'btn btn-success modalButton', 'data-title'=>'Crear Muestra']) ?>
  </p>
   </div></div></div>
 
<?php echo $this->renderFile('@backend/views/herramientas/thu.php'); ?>
  <h3>Datos Costomuestra</h3>
  <p> 
  Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
  Quam dolore numquam mollitia voluptatem rem nobis asperiores 
  animi est voluptas recusandae a labore deleniti nihil enim, 
  maxime id nesciunt. Minima, porro.
  </p>
  <p>
    <?= Html::button(Yii::t('models', 'Seleccionar Muestra'), ['value'=>Url::to(['costopredeterminados-has-costomuestra/index']),
    'class' => 'btn btn-success modalButton', 'data-title'=>'Seleccionar Muestra']) ?>
    <?= Html::button(Yii::t('models', 'Crear Muestra'), ['value'=>Url::to(['costopredeterminados-has-costomuestra/create']),
    'class' => 'btn btn-success modalButton', 'data-title'=>'Crear Muestra']) ?>
  </p>
   </div></div></div></div>

<?php echo $this->renderFile('@backend/views/herramientas/modal.php'); ?>

<!------------------------------------------------------------------------------ -->

<div class="row">

<?php echo $this->renderFile('@backend/views/herramientas/thu.php'); ?>
  <h3>Datos Costoparametro</h3>
  <p> 
  Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
  Quam dolore numquam mollitia voluptatem rem nobis asperiores 
  animi est voluptas recusandae a labore deleniti nihil enim, 
  maxime id nesciunt. Minima, porro.
  </p>
  <p>
    <?= Html::button(Yii::t('models', 'Seleccionar Muestra'), ['value'=>Url::to(['costopredeterminados-has-costoparametro/index']),
    'class' => 'btn btn-success modalButton', 'data-title'=>'Seleccionar Muestra']) ?>
    <?= Html::button(Yii::t('models', 'Crear Muestra'), ['value'=>Url::to(['costopredeterminados-has-costoparametro/create']),
    'class' => 'btn btn-success modalButton', 'data-title'=>'Crear Muestra']) ?>
  </p>
   </div></div></div>

 
<?php echo $this->renderFile('@backend/views/herramientas/thu.php'); ?>
  <h3>Datos Peticion</h3>
  <p> 
  Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
  Quam dolore numquam mollitia voluptatem rem nobis asperiores 
  animi est voluptas recusandae a labore deleniti nihil enim, 
  maxime id nesciunt. Minima, porro.
  </p>
  <p>
    <?= Html::button(Yii::t('models', 'Seleccionar Muestra'), ['value'=>Url::to(['peticion/indice']),
    'class' => 'btn btn-success modalButton', 'data-title'=>'Seleccionar Muestra']) ?>
    <?= Html::button(Yii::t('models', 'Crear Muestra'), ['value'=>Url::to(['peticion/create']),
    'class' => 'btn btn-success modalButton', 'data-title'=>'Crear Muestra']) ?>
  </p>
   </div></div></div></div>