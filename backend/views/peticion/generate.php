<?php 

use yii\helpers\Html;
use yii\widgets\Pjax;
use common\widgets\Thumbnail; 
use yii\helpers\Url;
  
$this->title = Yii::t('models', 'Crear Peticion');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Peticion'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?php echo $this->renderFile('@backend/views/herramientas/modal.php'); ?>

<div class="row">
  <div class="col-sm-6 col-md-4">
    <?= Thumbnail::widget([
      'label'=>'Clientes',
      'content'=>'Se solicita información de Nombre de los Clientes',
      'bottom'=>[
        ['name'=>'Seleccionar Tipos','value'=>['clientes/select'],
          ['class'=>'btn btn-info modalButton','data-title'=>'Seleccionar Clientes']],
        ['name'=>'Crear Tipos','value'=>['clientes/establish'],
          ['class'=>'btn btn-success modalButton','data-title'=>'Crear Clientes']]
      ]
    ])?> 
  </div>
  <div class="col-sm-6 col-md-4">
    <?= Thumbnail::widget([
      'label'=>'General',
      'content'=>'Se solicita información de: Numero de Copias del informe, Si tiene Caudal, si tiene Analisis, 
                  cual departamento Departamento para que Decreto y cual clientes',
      'bottom'=>[
        ['name'=>'Seleccionar General','value'=>['general/select'],
          ['class'=>'btn btn-info modalButton','data-title'=>'Seleccionar General']],
        ['name'=>'Crear General','value'=>['general/establish'],
          ['class'=>'btn btn-success modalButton','data-title'=>'Crear General']]
      ]
    ])?> 
  </div>
  <div class="col-sm-6 col-md-4">
    <?= Thumbnail::widget([
      'label'=>'Muestras',
      'content'=>'Se solicita información de Nombre de las Muestras, su tipo, la hora de muestreo',
      'bottom'=>[
        ['name'=>'Seleccionar Muestras','value'=>['muestras/select'],
          ['class'=>'btn btn-info modalButton','data-title'=>'Seleccionar Muestras']],
        ['name'=>'Crear Muestras','value'=>['muestras/establish'],
          ['class'=>'btn btn-success modalButton','data-title'=>'Crear Muestras']]
      ]
    ])?> 
  </div>
 </div>

<div class="row">
  <div class="col-sm-6 col-md-4">
    <?= Thumbnail::widget([
      'label'=>'Tipos',
      'content'=>'Se solicita información de Nombre de las Tipos',
      'bottom'=>[
        ['name'=>'Seleccionar Tipos','value'=>['tipo/select'],
          ['class'=>'btn btn-info modalButton','data-title'=>'Seleccionar Tipos']],
        ['name'=>'Crear Tipos','value'=>['tipo/establish'],
          ['class'=>'btn btn-success modalButton','data-title'=>'Crear Tipos']]
      ]
    ])?> 
  </div>
  <div class="col-sm-6 col-md-4">
    <?= Thumbnail::widget([
      'label'=>'Sub-Tipos',
      'content'=>'Se solicita información de Nombre de las Sub-Tipos',
      'bottom'=>[
        ['name'=>'Seleccionar Sub-Tipos','value'=>['sub-tipo/select'],
          ['class'=>'btn btn-info modalButton','data-title'=>'Seleccionar Sub-Tipos']],
        ['name'=>'Crear Sub-Tiposs','value'=>['sub-tipo/establish'],
          ['class'=>'btn btn-success modalButton','data-title'=>'Crear Sub-Tipos']]
      ]
    ])?> 
  </div>
  <div class="col-sm-6 col-md-4">
    <?= Thumbnail::widget([
      'label'=>'Ramas',
      'content'=>'Se solicita información de Nombre de las Ramas',
      'bottom'=>[
        ['name'=>'Seleccionar Ramas','value'=>['rama-has-general/select'],
          ['class'=>'btn btn-info modalButton','data-title'=>'Seleccionar Ramas']],
        ['name'=>'Crear Ramas','value'=>['rama-has-general/establish'],
          ['class'=>'btn btn-success modalButton','data-title'=>'Crear Ramas']]
      ]
    ])?> 
  </div>
 </div>

 <div class="row">
  <div class="col-sm-6 col-md-4">
    <?= Thumbnail::widget([
      'label'=>'Parámetros',
      'content'=>'Se solicita información de los parámetros',
      'bottom'=>[
        ['name'=>'Seleccionar Parámetros','value'=>['parametros/select'],
          ['class'=>'btn btn-info modalButton','data-title'=>'Seleccionar Parámetros']],
        ['name'=>'Crear Parámetros','value'=>['parametros/establish'],
          ['class'=>'btn btn-success modalButton','data-title'=>'Crear Parámetros']]
      ]
    ])?> 
  </div>
  <div class="col-sm-6 col-md-4">
    <?= Thumbnail::widget([
      'label'=>'Costo Muestra',
      'content'=>'Holllla',
      'bottom'=>[
        ['name'=>'Seleccionar Costo M.','value'=>['costopredeterminados-has-costomuestra/select'],
          ['class'=>'btn btn-info modalButton','data-title'=>'Seleccionar Costos Muestra']],
        ['name'=>'Crear Costos M.','value'=>['costopredeterminados-has-costomuestra/establish'],
          ['class'=>'btn btn-success modalButton','data-title'=>'Crear Costos Muestra']]
      ]
    ])?> 
  </div>
  <div class="col-sm-6 col-md-4">
    <?= Thumbnail::widget([
      'label'=>'Costos Parámetro',
      'content'=>'Holllla',
      'bottom'=>[
        ['name'=>'Seleccionar Costos P.','value'=>['costopredeterminados-has-costoparametro/select'],
          ['class'=>'btn btn-info modalButton','data-title'=>'Seccionar Costos Parámetros']],
        ['name'=>'Crear Costos P.','value'=>['costopredeterminados-has-costoparametro/establish'],
          ['class'=>'btn btn-success modalButton','data-title'=>'Crear Parámetros']]
      ]
    ])?> 
  </div>
  </div>
  
<div class="row"> 
  <div class="col-sm-6 col-md-4">
    <?= Thumbnail::widget([
      'label'=>'Petición',
      'content'=>'Holllla',
      'bottom'=>[
        ['name'=>'Seleccionar Petición','value'=>['peticion/select'],
          ['class'=>'btn btn-info modalButton','data-title'=>'Selecionar Petición']],
        ['name'=>'Crear Petición','value'=>['peticion/establish'],
          ['class'=>'btn btn-success modalButton','data-title'=>'Crear Petición']]
      ]
    ])?> 
  </div>
 </div>
