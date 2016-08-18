<?php
/* @var $this BitacoraController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bitacora',
);
?>

<h1>Bitacora</h1>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'bitacora-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'Id',
		'Usuario',
		'Accion',
		'Fecha',
		'Tabla',
		'Id_tupla',
	),
)); ?>