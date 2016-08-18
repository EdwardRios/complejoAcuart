<?php
/* @var $this HorarioController */
/* @var $data Horario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HoraInicio')); ?>:</b>
	<?php echo CHtml::encode($data->HoraInicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HoraFin')); ?>:</b>
	<?php echo CHtml::encode($data->HoraFin); ?>
	<br />


</div>