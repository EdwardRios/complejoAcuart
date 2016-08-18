<?php
/* @var $this SolicitaController */
/* @var $model Solicita */

$this->breadcrumbs=array(
	'Solicitas'=>array('index'),
	$model->Id,
);

$this->menu=array(
	array('label'=>'List Solicita', 'url'=>array('index')),
	array('label'=>'Create Solicita', 'url'=>array('create')),
	array('label'=>'Update Solicita', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>'Delete Solicita', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Solicita', 'url'=>array('admin')),
);
?>

<h1>View Solicita #<?php echo $model->Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Id',
		'Fecha',
		'idServicio',
		'idCliente',
	),
)); ?>
