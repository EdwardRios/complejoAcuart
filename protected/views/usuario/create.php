<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuario'=>array('view'),
	'Agregar',
);

?>

<h1>Nuevo Usuario</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>