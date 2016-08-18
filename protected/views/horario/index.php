<?php
/* @var $this HorarioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Horarios',
);
?>

<h1>Horarios</h1>

<div class="pull-left">
	<?php $this->widget('bootstrap.widgets.TbButton',array(
		'type'=>'primary',
		'label'=>'Agregar Nuevo',
		'url'=>array('create'),
	));?>
</div>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'horario-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ID',
		'HoraInicio',
		'HoraFin',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
