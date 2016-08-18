<?php
/* @var $this ServicioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Servicios',
);
?>

<h1>Servicios</h1>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'servicio-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'Id',
		'Nombre',
		'Precio',
		'Descripcion',
	),
)); ?>
