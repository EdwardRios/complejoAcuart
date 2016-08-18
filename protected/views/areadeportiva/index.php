<?php
/* @var $this AreadeportivaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Area Deportiva',
);

?>

<h1>Area Deportiva</h1>

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
			'template'=>'{view}',
		),
	),
)); ?>