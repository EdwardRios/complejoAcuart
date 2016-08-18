<?php
/* @var $this UsuarioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Usuario',
);

?>

<h1>Listado de Usuarios</h1>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'usuario-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'Id',
		'Nombre',
		'Apellido',
		'CI',
		'Direccion',
		'Telefono',
		/*
		'Passw',
		*/
		'tipo',
		
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template' => '{view}',
		),
	),
)); ?>