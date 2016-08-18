<?php
/* @var $this ServicioController */
/* @var $model Servicio */

$this->breadcrumbs=array(
	'Servicio'=>array('admin'),
	'Agregar',
);

?>

<h1>Agregar Servicio</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>