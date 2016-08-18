<?php
/* @var $this ReservaController */
/* @var $model Reserva */
/* @var $form CActiveForm */
?>

<div class="form-horizontal well">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'reserva-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<div class="control-group">
		<?php echo $form->labelEx($model,'idUsuario', array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->textField($model,'idUsuario',array('value'=>Yii::app()->user->id,'readonly'=>'false')); ?>
		<?php echo $form->error($model,'idUsuario'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'Estado', array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->textField($model,'Estado',array('value'=>'Ocupado','readonly'=>'false') ); ?>
		<?php echo $form->error($model,'Estado'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'Fecha', array('class'=>'control-label')); ?>
		<div class="controls">
			<?php
			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
				'model'=>$model,
				'attribute'=>'Fecha',
				'value'=>$model->Fecha,
				'language'=>'es',
				'htmlOptions'=>array('readonly'=>"readonly"),
				'options'=>array(
					'autoSize'=>true,
					'defaultDate'=>$model->Fecha,
					'dateFormat'=>'yy-mm-dd',
					'buttonImage'=>Yii::app()->baseUrl.'/images/calendario.png',
					'buttonImageOnly'=>true,
					'buttonText'=>'Fecha',
					'selectOtherMonths'=>true,
					'showAnim'=>'slide',
					'showButtonPanel'=>true,
					'showOn'=>'button',
					'showOtherMonths'=>true,
					'changeMonth'=>'true',
					'changeYear'=>'true',
					'minDate'=>'date("Y-m-d")',
					'maxDate'=>'+20Y',
				),
			));?>
		<?php echo $form->error($model,'Fecha'); ?>
		</div>
	</div>


	<div class="control-group">
		<?php echo $form->labelEx($model,'idCliente', array('class'=>'control-label')); ?>

		<div class="controls">
		<?php echo $form->dropDownList($model,'idCliente',Cliente::toList(),array('empty'=>'Seleccione...')); ?>
		<?php echo $form->error($model,'idCliente'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'idHorario', array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->dropDownList($model,'idHorario', Horario::toList(), array('empty'=>'Seleccione...')); ?>
		<?php echo $form->error($model,'idHorario'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'idAreaDeportiva', array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->dropDownList($model,'idAreaDeportiva', Areadeportiva::toList(), array('empty'=>'Seleccione...')); ?>
		<?php echo $form->error($model,'idAreaDeportiva'); ?>
		</div>
	</div>

	<div class="control-group">
		<di class="controls">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Save', array('class'=>'btn btn-primary')); ?>
		</di>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->