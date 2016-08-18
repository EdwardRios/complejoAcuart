<?php
/* @var $this ClienteController */
/* @var $model Cliente */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	'Agregar',
);

$this->menu=array(
	array('label'=>'List Cliente', 'url'=>array('index')),
	array('label'=>'Manage Cliente', 'url'=>array('admin')),
);
?>

<h1>Agregar Cliente</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>