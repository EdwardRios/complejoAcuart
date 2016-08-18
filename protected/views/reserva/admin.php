<?php
/* @var $this ReservaController */
/* @var $model Reserva */

$this->breadcrumbs=array(
	'Reservas'=>array('index'),
	'Administrador',
);


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#reserva-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Reservas</h1>

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
		/*'ID',
		*/
		'Estado',
		'Fecha',
		//'idUsuario',
		array(
			'name'=>'per.Nombre',
			'filter'=> CHtml::activeTextField($model,'perNombre')
		),
		//'idCliente',
		array(
			'name'=>'cli.ApellidoCliente',
			'filter'=> CHtml::activeTextField($model,'cliApellidoCliente')
		),
		
		//'idHorario',
		array(
			'name'=>'hor.HoraInicio',
			'filter'=> CHtml::activeTextField($model,'horHoraInicio')
		),
		array(
			'name'=>'area.Nombre',
			'filter'=> CHtml::activeTextField($model,'areaNombre')
		),
		/*
		'idAreaDeportiva',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
