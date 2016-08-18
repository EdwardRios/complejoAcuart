<?php
/* @var $this ReservaController */
/* @var $data Reserva */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Estado')); ?>:</b>
	<?php echo CHtml::encode($data->Estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idCliente')); ?>:</b>
	<?php echo CHtml::encode($data->idCliente); ?>
	<br />
<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('idPersonal')); ?>:</b>
	<?php echo CHtml::encode($data->idPersonal); ?>
	<br />
	-->

	<b><?php echo CHtml::encode($data->getAttributeLabel('idHorario')); ?>:</b>
	<?php echo CHtml::encode($data->idHorario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idAreaDeportiva')); ?>:</b>
	<?php echo CHtml::encode($data->idAreaDeportiva); ?>
	<br />


</div>