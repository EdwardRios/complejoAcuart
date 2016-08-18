<?php
/* @var $this ServicioController */
/* @var $model Servicio */
/* @var $form CActiveForm */
?>

<div class="form.horizontal well">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'servicio-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<div class="control-group">
		<?php echo $form->labelEx($model,'Nombre', array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->textField($model,'Nombre',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Nombre'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'Precio', array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->textField($model,'Precio'); ?>
		<?php echo $form->error($model,'Precio'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'Descripcion', array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->textArea($model,'Descripcion',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Descripcion'); ?>
		</div>
	</div>

	<div class="control-group">
		<div class="controls">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Agregar' : 'Guardar', array('class'=>'btn btn-primary')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->