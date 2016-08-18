<?php
/* @var $this AreadeportivaController */
/* @var $model Areadeportiva */

$this->breadcrumbs=array(
	'Area Deportiva'=>array('index'),
	$model->Id,
);
?>

<h1>Detalle Area deportiva</h1>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Id',
		'Nombre',
		'Descripcion',
	),
)); ?>
