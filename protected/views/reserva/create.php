<?php
/* @var $this ReservaController */
/* @var $model Reserva */

$this->breadcrumbs=array(
	'Reservas'=>array('view'),
	'Create',
);
/*
$this->menu=array(
	array('label'=>'List Reserva', 'url'=>array('admin')),
	array('label'=>'Manage Reserva', 'url'=>array('admin')),
);*/
?> 

<h1>Nueva Reserva</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>