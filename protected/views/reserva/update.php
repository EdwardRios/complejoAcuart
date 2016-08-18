<?php
/* @var $this ReservaController */
/* @var $model Reserva */

$this->breadcrumbs=array(
	'Reservas'=>array('admin'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);
/*
$this->menu=array(
	array('label'=>'List Reserva', 'url'=>array('index')),
	array('label'=>'Create Reserva', 'url'=>array('create')),
	array('label'=>'View Reserva', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Reserva', 'url'=>array('admin')),
);*/
?>

<h1>Actualizar Reserva <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

