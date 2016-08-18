<?php
/* @var $this ClienteController */
/* @var $model Cliente */

$this->breadcrumbs=array(
	'Clientes'=>array('admin'),
	'Administrador',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#cliente-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Clientes</h1>

<div class="pull-left">
	<?php $this->widget('bootstrap.widgets.TbButton',array(
		'type'=>'primary',
		'label'=>'Agregar Nuevo',
		'url'=>array('create'),
	));?>
</div>


<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'cliente-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'ID',
		'CI',
		'Nombre',
		'ApellidoCliente',
		'email',
		'Direccion',
		'Telefono',
		//'Sexo',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
