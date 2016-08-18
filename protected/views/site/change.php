<?php
/* @var $this SiteController */
/* @var $model ChangeForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Cambiar contraseña';
$this->breadcrumbs=array(
	'Cambiar contraseña',
);
?>

<h1>Cambiar contraseña</h1>

<?php if (Yii::app()->user->hasFlash('success')): ?>
	<div class="alert  alert-success">
		<?php echo Yii::app()->user->getFlash('success'); ?>
	</div>
<?php endif ?>
<?php if (Yii::app()->user->hasFlash('error')): ?>
	<div class="alert">
		<?php echo Yii::app()->user->getFlash('error'); ?>
	</div>
<?php endif ?>

<div class="form-horizontal">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<div class="form-horizontal well">
		<div class="control-group">
		<?php echo $form->labelEx($model,'passw', array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->passwordField($model,'passw'); ?>
		    <?php echo $form->error($model,'passw'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'passw_new', array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->passwordField($model,'passw_new'); ?>
		    <?php echo $form->error($model,'passw_new'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'passw_new_repeat', array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->passwordField($model,'passw_new_repeat'); ?>
		    <?php echo $form->error($model,'passw_new_repeat'); ?>
		</div>
	</div>

	<div class="control-group">
		<div class="controls">
			<?php echo CHtml::submitButton('Cambiar contraseña', array('class'=>'btn btn-primary')); ?>
		</div>
	</div>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
