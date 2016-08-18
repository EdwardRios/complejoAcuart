<?php
/* @var $this PersonalController */
/* @var $model Personal */

$this->breadcrumbs=array(
	'Personal'=>array('index'),
	'Agregar',
);

?>

<h1>Agregar Personal</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>