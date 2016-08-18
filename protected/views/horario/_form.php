<?php
/* @var $this HorarioController */
/* @var $model Horario */
/* @var $form CActiveForm */
?>

<div class="form-horizontal well">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'horario-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<div class="control-group">
		<?php echo $form->labelEx($model,'HoraInicio', array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->textField($model,'HoraInicio'); ?>
		<?php echo $form->error($model,'HoraInicio'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'HoraFin', array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->textField($model,'HoraFin'); ?>
		<?php echo $form->error($model,'HoraFin'); ?>
		</div>
	</div>

	<div class="control-group">
		<div class="controls">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' :'Guardar', array('class'=>'btn btn-success')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->