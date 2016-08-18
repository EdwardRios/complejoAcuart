<?php
/* @var $this ServicioController */
/* @var $model Servicio */

$this->breadcrumbs=array(
	'Servicio'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	'Modificar',
);

?>

<h1>Modificar Servicio</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>