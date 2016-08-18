<?php
/* @var $this ClienteController */
/* @var $model Cliente */
/* @var $form CActiveForm */
?>

<div class="form-horizontal well">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cliente-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>


	<div class="control-group">
		<?php echo $form->labelEx($model,'CI', array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->textField($model,'CI'); ?>
		    <?php echo $form->error($model,'CI'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'Nombre', array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->textField($model,'Nombre',array('size'=>60,'maxlength'=>60)); ?>
		    <?php echo $form->error($model,'Nombre'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'ApellidoCliente', array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->textField($model,'ApellidoCliente',array('size'=>30,'maxlength'=>30)); ?>
		    <?php echo $form->error($model,'ApellidoCliente'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'email', array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>150)); ?>
		    <?php echo $form->error($model,'email'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'Direccion', array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->textField($model,'Direccion',array('size'=>60,'maxlength'=>120)); ?>
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
		<?php echo $form->labelEx($model,'Sexo', array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->DropDownList($model,'Sexo',array('empty'=>'Seleccione...','Masculino'=>'Masculino','Femenino'=>'Femenino')); ?>
		    <?php echo $form->error($model,'Sexo'); ?>
		</div>
	</div>

	

	<div class="control-group">
		<div class="controls">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Guardar', array('class'=>'btn btn-success')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->