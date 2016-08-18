<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="form-horizontal well">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuario-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<div class="control-group">
		<?php echo $form->labelEx($model,'Nombre',array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->textField($model,'Nombre',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'Nombre'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'Apellido',array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->textField($model,'Apellido',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Apellido'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'CI',array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->textField($model,'CI'); ?>
		<?php echo $form->error($model,'CI'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'Direccion',array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->textField($model,'Direccion',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'Direccion'); ?>
		</div>
	</div>

	

	<div class="control-group">
		<?php echo $form->labelEx($model,'Telefono', array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->textField($model,'Telefono',array('size'=>15,'maxlength'=>15)); ?>
		    <?php echo $form->error($model,'Telefono'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'tipo',array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->dropDownList($model,'tipo', array('empty'=>'Seleccione...','0'=>'Cliente','1'=>'Personal')); ?>
		<?php echo $form->error($model,'tipo'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'Passw',array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->passwordField($model,'Passw',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Passw'); ?>
		</div>
	</div>

	<div class="control-group">
		<div class="controls">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Agregar' : 'Guardar', array('class'=>'btn btn-primary')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->