<?php
/* @var $this ClienteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Reservas',
);
/*
$this->menu=array(
	array('label'=>'Create Reserva', 'url'=>array('create')),
	array('label'=>'Manage Reserva', 'url'=>array('admin')),
);*/
?>

<h1>Reserva</h1>

<div class="pull-left">
	<?php $this->widget('bootstrap.widgets.TbButton',array(
		'type'=>'primary',
		'label'=>'Agregar Nuevo',
		'url'=>array('create'),
	));?>
</div>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'reserva-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'ID',
		'Estado',
		'Fecha',
		//'idCliente',
		array(
			'name'=>'cli.ApellidoCliente',
			'filter'=> CHtml::activeTextField($model,'cliApellidoCliente')
		),
		//'idUsuario',
		//'idHorario',
		array(
			'name'=>'hor.HoraInicio',
			'filter'=> CHtml::activeTextField($model,'horHoraInicio')
		),
		//'idAreaDeportiva',
		array(
			'name'=>'area.Nombre',
			'filter'=> CHtml::activeTextField($model,'areaNombre')
		),
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template' => '{view}',
		),
	),
)); ?>

