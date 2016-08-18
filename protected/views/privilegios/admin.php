<?php
/* @var $this PrivilegiosController */
/* @var $model Privilegios */

$this->breadcrumbs=array(
	
	'Privilegios',
);


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#privilegios-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Privilegios</h1>


<div class="pull-left">
	<?php

 $this->widget('bootstrap.widgets.TbButton',array(
		'type'=>'primary',
		'label'=>'Asignar Privilegios',
		'url'=>array('create'),
	));
 ?>
</div>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'privilegios-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'Idusuario',
		'Areacreate',
		'Areaupdate',
		'Areadelete',
		'Asientocreate',
		'Bancocreate',
		'Bancoupdate',
		'Bancodelete',
		'Chequecreate',
		'Chequeupdate',
		'Chequedelete',
		'Comprobantecreate',
		'Comprobanteupdate',
		'Comprobanteanular',
		'Comprobanteautorizado',
		'Comprobanteelaborado',
		'Comprobanterevisado',
		'Costosareacreate',
		'Costosareaupdate',
		'Costosareadelete',
		'Cuentacreate',
		'Cuentaupdate',
		'Entidadcreate',
		'Entidadupdate',
		'Entidaddelete',
		'Facturacompracreate',
		'Facturacompraupdate',
		'Facturacompradelete',
		'Facturaventacreate',
		'Facturaventaanular',
		'Gestioncreate',
		'Gestionupdate',
		'Periodofiscalcreate',
		'Periodofiscalupdate',
		'Tipocambiocreate',
		'Tipocambioupdate',
		'Tipocambiodelete',
		'Tipocomprobantecreate',
		'Tipocomprobanteupdate',
		'Tipocomprobantedelete',
		'Cierreperiodo',
		'Cierregestion',
	),
)); ?>
