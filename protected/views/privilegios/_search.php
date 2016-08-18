<?php
/* @var $this PrivilegiosController */
/* @var $model Privilegios */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Id'); ?>
		<?php echo $form->textField($model,'Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Idusuario'); ?>
		<?php echo $form->textField($model,'Idusuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Areacreate'); ?>
		<?php echo $form->textField($model,'Areacreate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Areaupdate'); ?>
		<?php echo $form->textField($model,'Areaupdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Areadelete'); ?>
		<?php echo $form->textField($model,'Areadelete'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Asientocreate'); ?>
		<?php echo $form->textField($model,'Asientocreate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Bancocreate'); ?>
		<?php echo $form->textField($model,'Bancocreate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Bancoupdate'); ?>
		<?php echo $form->textField($model,'Bancoupdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Bancodelete'); ?>
		<?php echo $form->textField($model,'Bancodelete'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Chequecreate'); ?>
		<?php echo $form->textField($model,'Chequecreate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Chequeupdate'); ?>
		<?php echo $form->textField($model,'Chequeupdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Chequedelete'); ?>
		<?php echo $form->textField($model,'Chequedelete'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Comprobantecreate'); ?>
		<?php echo $form->textField($model,'Comprobantecreate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Comprobanteupdate'); ?>
		<?php echo $form->textField($model,'Comprobanteupdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Comprobanteanular'); ?>
		<?php echo $form->textField($model,'Comprobanteanular'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Comprobanteautorizado'); ?>
		<?php echo $form->textField($model,'Comprobanteautorizado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Comprobanteelaborado'); ?>
		<?php echo $form->textField($model,'Comprobanteelaborado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Comprobanterevisado'); ?>
		<?php echo $form->textField($model,'Comprobanterevisado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Costosareacreate'); ?>
		<?php echo $form->textField($model,'Costosareacreate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Costosareaupdate'); ?>
		<?php echo $form->textField($model,'Costosareaupdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Costosareadelete'); ?>
		<?php echo $form->textField($model,'Costosareadelete'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Cuentacreate'); ?>
		<?php echo $form->textField($model,'Cuentacreate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Cuentaupdate'); ?>
		<?php echo $form->textField($model,'Cuentaupdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Entidadcreate'); ?>
		<?php echo $form->textField($model,'Entidadcreate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Entidadupdate'); ?>
		<?php echo $form->textField($model,'Entidadupdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Entidaddelete'); ?>
		<?php echo $form->textField($model,'Entidaddelete'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Facturacompracreate'); ?>
		<?php echo $form->textField($model,'Facturacompracreate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Facturacompraupdate'); ?>
		<?php echo $form->textField($model,'Facturacompraupdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Facturacompradelete'); ?>
		<?php echo $form->textField($model,'Facturacompradelete'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Facturaventacreate'); ?>
		<?php echo $form->textField($model,'Facturaventacreate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Facturaventaanular'); ?>
		<?php echo $form->textField($model,'Facturaventaanular'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Gestioncreate'); ?>
		<?php echo $form->textField($model,'Gestioncreate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Gestionupdate'); ?>
		<?php echo $form->textField($model,'Gestionupdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Periodofiscalcreate'); ?>
		<?php echo $form->textField($model,'Periodofiscalcreate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Periodofiscalupdate'); ?>
		<?php echo $form->textField($model,'Periodofiscalupdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Tipocambiocreate'); ?>
		<?php echo $form->textField($model,'Tipocambiocreate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Tipocambioupdate'); ?>
		<?php echo $form->textField($model,'Tipocambioupdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Tipocambiodelete'); ?>
		<?php echo $form->textField($model,'Tipocambiodelete'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Tipocomprobantecreate'); ?>
		<?php echo $form->textField($model,'Tipocomprobantecreate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Tipocomprobanteupdate'); ?>
		<?php echo $form->textField($model,'Tipocomprobanteupdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Tipocomprobantedelete'); ?>
		<?php echo $form->textField($model,'Tipocomprobantedelete'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Usuariocreate'); ?>
		<?php echo $form->textField($model,'Usuariocreate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Usuarioupdate'); ?>
		<?php echo $form->textField($model,'Usuarioupdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Cierreperiodo'); ?>
		<?php echo $form->textField($model,'Cierreperiodo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Cierregestion'); ?>
		<?php echo $form->textField($model,'Cierregestion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Bitacora'); ?>
		<?php echo $form->textField($model,'Bitacora'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->