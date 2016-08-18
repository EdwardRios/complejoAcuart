<?php
/* @var $this SolicitaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Solicitas',
);

$this->menu=array(
	array('label'=>'Create Solicita', 'url'=>array('create')),
	array('label'=>'Manage Solicita', 'url'=>array('admin')),
);
?>

<h1>Solicitas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
