<?php
/* @var $this AreadeportivaController */
/* @var $model Areadeportiva */

$this->breadcrumbs=array(
	'Area Deportiva'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	'Modificar',
);
?>

<h1>Modificar Area deportiva</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>