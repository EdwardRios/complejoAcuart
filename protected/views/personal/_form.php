<?php
/* @var $this PersonalController */
/* @var $model Personal */
/* @var $form CActiveForm */
?>

<div class="form-horizontal well">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'personal-form',
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
		<?php echo $form->labelEx($model,'Apellido', array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->textField($model,'Apellido',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Apellido'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'Direccion', array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->textField($model,'Direccion',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Direccion'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'Telefono', array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->textField($model,'Telefono'); ?>
		<?php echo $form->error($model,'Telefono'); ?>
		</div>
	</div>

	<div class="control-group">
		<div class="controls">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Agregar' : 'Guardar', array('class'=>'btn btn-success')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->