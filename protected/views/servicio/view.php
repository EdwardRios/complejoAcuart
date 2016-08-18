<?php
/* @var $this ServicioController */
/* @var $model Servicio */

$this->breadcrumbs=array(
	'Servicio'=>array('admin'),
	$model->Id,
);
?>

<h1>Detalle de Servicio</h1>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Id',
		'Nombre',
		'Precio',
		'Descripcion',
	),
)); ?>
