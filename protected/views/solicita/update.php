<?php
/* @var $this SolicitaController */
/* @var $model Solicita */

$this->breadcrumbs=array(
	'Solicitas'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Solicita', 'url'=>array('index')),
	array('label'=>'Create Solicita', 'url'=>array('create')),
	array('label'=>'View Solicita', 'url'=>array('view', 'id'=>$model->Id)),
	array('label'=>'Manage Solicita', 'url'=>array('admin')),
);
?>

<h1>Update Solicita <?php echo $model->Id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>