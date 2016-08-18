<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuario'=>array('admin'),
	$model->Id=>array('view','id'=>$model->Id),
	'Modificar',
);

?>

<h1>Modificar Usuario</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>