<?php
/* @var $this ServicioController */
/* @var $model Servicio */
/* @var $form CActiveForm */
?>

<div class="form-horizontal well">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="control-group">
		<?php echo $form->label($model,'Id', array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->textField($model,'Id'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'Nombre', array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->textField($model,'Nombre',array('size'=>50,'maxlength'=>50)); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'Precio', array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->textField($model,'Precio'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'Descripcion', array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->textArea($model,'Descripcion',array('size'=>60,'maxlength'=>255)); ?>
		</div>
	</div>

	<div class="control-group">
		<div class="controls">
			<?php echo CHtml::submitButton('Buscar', array('class'=>'btn btn-primary')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->