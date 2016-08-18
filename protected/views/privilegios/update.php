<?php
/* @var $this PrivilegiosController */
/* @var $model Privilegios */

$this->breadcrumbs=array(
	'Privilegios'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	'Modificar',
);
?>

<h1>Modificar Privilegios</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>