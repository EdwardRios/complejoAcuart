<?php
/* @var $this PrivilegiosController */
/* @var $model Privilegios */

$this->breadcrumbs=array(
	'Privilegios'=>array('index'),
	'Asignar',
);
?>

<h1>Asignar Privilegios</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>