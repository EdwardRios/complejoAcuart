<?php
/* @var $this SolicitaController */
/* @var $model Solicita */

$this->breadcrumbs=array(
	'Solicitas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Solicita', 'url'=>array('index')),
	array('label'=>'Manage Solicita', 'url'=>array('admin')),
);
?>

<h1>Create Solicita</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>