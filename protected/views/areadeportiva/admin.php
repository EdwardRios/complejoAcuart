<?php
/* @var $this AreadeportivaController */
/* @var $model Areadeportiva */

$this->breadcrumbs=array(
	'Area Deportiva'=>array('index'),
	'Administrador',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#areadeportiva-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Area Deportivas</h1>

<div class="pull-left">
	<?php $this->widget('bootstrap.widgets.TbButton',array(
		'type'=>'primary',
		'label'=>'Agregar Nuevo',
		'url'=>array('create'),
	));?>
</div>


<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'areadeportiva-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'Id',
		'Nombre',
		'Descripcion',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
