<?php
/* @var $this PrivilegiosController */
/* @var $model Privilegios */
/* @var $form CActiveForm */
?>

<div class="form-horizontal">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'privilegios-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>


	<div class="control-group">
		<?php echo $form->labelEx($model,'Nombre Usuario',array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->dropDownList($model,'Idusuario', Usuario::tolist(), array('empty'=>'Seleccione...')); ?>
		    <?php echo $form->error($model,'Idusuario');?>
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Asignar' : 'Guardar', array('class'=>'btn btn-primary')); ?>
	</div>
	</div>
	
	<div class="pull-left">
		<div class="form-horizontal well">
		<div class="control-group">
		<h3>Area</h3><?php echo $form->labelEx($model,'Crear',array('class'=>'control-label')); ?>
	    <div class="controls">
	    	<?php echo $form->dropDownList($model,'Areacreate', array('0'=>'Acceso','1'=>'Denegado',)); ?>
		    <?php echo $form->error($model,'Areacreate'); ?>
	    </div>
	</div>
	<div class="control-group">
		<?php echo $form->labelEx($model,'Editar',array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->dropDownList($model,'Areaupdate', array('0'=>'Acceso','1'=>'Denegado',)); ?>
		    <?php echo $form->error($model,'Areaupdate'); ?>
		</div>
	</div>
	<div class="control-group">
		<?php echo $form->labelEx($model,'Eliminar',array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->dropDownList($model,'Areadelete', array('0'=>'Acceso','1'=>'Denegado',)); ?>
		    <?php echo $form->error($model,'Areadelete'); ?>
		</div>
	</div>
	</div>
	</div>
	

	<div class="pull-right">
		<div class="form-horizontal well">
		<div class="control-group">
		<h3>Banco</h3><?php echo $form->labelEx($model,'Crear',array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->dropDownList($model,'Bancocreate', array('0'=>'Acceso','1'=>'Denegado',)); ?>
		    <?php echo $form->error($model,'Bancocreate'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'Editar',array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->dropDownList($model,'Bancoupdate', array('0'=>'Acceso','1'=>'Denegado',)); ?>
		    <?php echo $form->error($model,'Bancoupdate'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'Eliminar',array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->dropDownList($model,'Bancodelete', array('0'=>'Acceso','1'=>'Denegado',)); ?>
		    <?php echo $form->error($model,'Bancodelete'); ?>
		</div>
	</div>
	</div>
	</div>
	

	<div class="pull-left">
		<div class="form-horizontal well">
		<div class="control-group">
		<h3>Cheque</h3><?php echo $form->labelEx($model,'Crear',array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->dropDownList($model,'Chequecreate', array('0'=>'Acceso','1'=>'Denegado',)); ?>
		    <?php echo $form->error($model,'Chequecreate'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'Editar',array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->dropDownList($model,'Chequeupdate', array('0'=>'Acceso','1'=>'Denegado',)); ?>
		    <?php echo $form->error($model,'Chequeupdate'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'Eliminar',array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->dropDownList($model,'Chequedelete', array('0'=>'Acceso','1'=>'Denegado',)); ?>
		    <?php echo $form->error($model,'Chequedelete'); ?>
		</div>
	</div>
	</div>
	</div>

	<div class="pull-right">
	<div class="form-horizontal well">
		<div class="control-group">
		<h3>Costo Area</h3><?php echo $form->labelEx($model,'Crear',array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->dropDownList($model,'Costosareacreate', array('0'=>'Acceso','1'=>'Denegado',)); ?>
		    <?php echo $form->error($model,'Costosareacreate'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'Editar',array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->dropDownList($model,'Costosareaupdate', array('0'=>'Acceso','1'=>'Denegado',)); ?>
		    <?php echo $form->error($model,'Costosareaupdate'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'Eliminar',array('class'=>'control-label')); ?>
       <div class="controls">
            <?php echo $form->dropDownList($model,'Costosareadelete', array('0'=>'Acceso','1'=>'Denegado',)); ?>
		    <?php echo $form->error($model,'Costosareadelete'); ?>
       </div>
	</div>
	</div>
	</div>

	<div class="pull-left">
		<div class="form-horizontal well">
		<div class="control-group">
		<h3>Entidad</h3><?php echo $form->labelEx($model,'Crear',array('class'=>'control-label')); ?>
	    <div class="controls">
	    	<?php echo $form->dropDownList($model,'Entidadcreate', array('0'=>'Acceso','1'=>'Denegado',)); ?>
		    <?php echo $form->error($model,'Entidadcreate'); ?>
	    </div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'Editar',array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->dropDownList($model,'Entidadupdate', array('0'=>'Acceso','1'=>'Denegado',)); ?>
		    <?php echo $form->error($model,'Entidadupdate'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'Eliminar',array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->dropDownList($model,'Entidaddelete', array('0'=>'Acceso','1'=>'Denegado',)); ?>
		    <?php echo $form->error($model,'Entidaddelete'); ?>
		</div>
	</div>
	</div>
	</div>
	
	<div class="pull-right">
	<div class="form-horizontal well">
		<div class="control-group">
		<h3>Factura de Compra</h3><?php echo $form->labelEx($model,'Crear',array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->dropDownList($model,'Facturacompracreate', array('0'=>'Acceso','1'=>'Denegado',)); ?>
	    	<?php echo $form->error($model,'Facturacompracreate'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'Editar',array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->dropDownList($model,'Facturacompraupdate', array('0'=>'Acceso','1'=>'Denegado',)); ?>
		    <?php echo $form->error($model,'Facturacompraupdate'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'Eliminar',array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->dropDownList($model,'Facturacompradelete', array('0'=>'Acceso','1'=>'Denegado',)); ?>
		    <?php echo $form->error($model,'Facturacompradelete'); ?>
		</div>
	</div>
	</div>
	</div>

	<div class="pull-left">
		<div class="form-horizontal well">
		<div class="control-group">
		<h3>Tipo de Cambio</h3><?php echo $form->labelEx($model,'Crear',array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->dropDownList($model,'Tipocambiocreate', array('0'=>'Acceso','1'=>'Denegado',)); ?>
		    <?php echo $form->error($model,'Tipocambiocreate'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'Editar',array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->dropDownList($model,'Tipocambioupdate', array('0'=>'Acceso','1'=>'Denegado',)); ?>
		    <?php echo $form->error($model,'Tipocambioupdate'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'Eliminar',array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->dropDownList($model,'Tipocambiodelete', array('0'=>'Acceso','1'=>'Denegado',)); ?>
		    <?php echo $form->error($model,'Tipocambiodelete'); ?>
		</div>
	</div>
	</div>
	</div>
	
	<div class="pull-right">
	<div class="form-horizontal well">
		<div class="control-group">
		<h3>Tipo Comprobante</h3><?php echo $form->labelEx($model,'Crear',array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->dropDownList($model,'Tipocomprobantecreate', array('0'=>'Acceso','1'=>'Denegado',)); ?>
		    <?php echo $form->error($model,'Tipocomprobantecreate'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'Editar',array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->dropDownList($model,'Tipocomprobanteupdate', array('0'=>'Acceso','1'=>'Denegado',)); ?>
	    	<?php echo $form->error($model,'Tipocomprobanteupdate'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'Eliminar',array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->dropDownList($model,'Tipocomprobantedelete', array('0'=>'Acceso','1'=>'Denegado',)); ?>
		    <?php echo $form->error($model,'Tipocomprobantedelete'); ?>
		</div>
	</div>
	</div>
	</div>

	<div class="pull-left">
		<div class="form-horizontal well">
		<div class="control-group">
		<h3>Usuario</h3><?php echo $form->labelEx($model,'Crear',array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->dropDownList($model,'Usuariocreate', array('0'=>'Acceso','1'=>'Denegado',)); ?>
		    <?php echo $form->error($model,'Usuariocreate'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'Editar',array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->dropDownList($model,'Usuarioupdate', array('0'=>'Acceso','1'=>'Denegado',)); ?>
		    <?php echo $form->error($model,'Usuarioupdate'); ?>
		</div>
	</div>
	
	</div>
	</div>
	
	<div class="pull-right">
	<div class="form-horizontal well">
		<div class="control-group">
		<h3>Asiento</h3><?php echo $form->labelEx($model,'Crear',array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->dropDownList($model,'Asientocreate', array('0'=>'Acceso','1'=>'Denegado',)); ?>
		    <?php echo $form->error($model,'Asientocreate'); ?>
		</div>
	</div>
	</div>
	</div>
	

   <div class="pull-right">
	<div class="form-horizontal well">
		<div class="control-group">
		<h3>Cuenta</h3><?php echo $form->labelEx($model,'Crear',array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->dropDownList($model,'Cuentacreate', array('0'=>'Acceso','1'=>'Denegado',)); ?>
		    <?php echo $form->error($model,'Cuentacreate'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'Editar',array('class'=>'control-label')); ?>
	    <div class="controls">
	   	    <?php echo $form->dropDownList($model,'Cuentaupdate', array('0'=>'Acceso','1'=>'Denegado',)); ?>
		    <?php echo $form->error($model,'Cuentaupdate'); ?>
	    </div>
	</div>
	</div>
	</div>

	
	<div class="pull-left">
	<div class="form-horizontal well">
		<div class="control-group">
		<h3>Factura de Venta</h3><?php echo $form->labelEx($model,'Crear',array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->dropDownList($model,'Facturaventacreate', array('0'=>'Acceso','1'=>'Denegado',)); ?>
		    <?php echo $form->error($model,'Facturaventacreate'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'Anular',array('class'=>'control-label')); ?>
	    <div class="controls">
	    	<?php echo $form->dropDownList($model,'Facturaventaanular', array('0'=>'Acceso','1'=>'Denegado',)); ?>
		    <?php echo $form->error($model,'Facturaventaanular'); ?>
	    </div>
	</div>
	</div>
	</div>

	<div class="pull-right">
	<div class="form-horizontal well">
		<div class="control-group">
		<h3>Gestion</h3><?php echo $form->labelEx($model,'Crear',array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->dropDownList($model,'Gestioncreate', array('0'=>'Acceso','1'=>'Denegado',)); ?>
		    <?php echo $form->error($model,'Gestioncreate'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'Editar',array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->dropDownList($model,'Gestionupdate', array('0'=>'Acceso','1'=>'Denegado',)); ?>
		    <?php echo $form->error($model,'Gestionupdate'); ?>
		</div>
	</div>
	</div>
	</div>

	<div class="pull-left">
	<div class="form-horizontal well">
		<div class="control-group">
		<h3>Periodo Fiscal</h3><?php echo $form->labelEx($model,'Crear',array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->dropDownList($model,'Periodofiscalcreate', array('0'=>'Acceso','1'=>'Denegado',)); ?>
		    <?php echo $form->error($model,'Periodofiscalcreate'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'Editar',array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->dropDownList($model,'Periodofiscalupdate', array('0'=>'Acceso','1'=>'Denegado',)); ?>
		    <?php echo $form->error($model,'Periodofiscalupdate'); ?>
		</div>
	</div>
	</div>
	</div>

	
	<div class="pull-right">
	<div class="form-horizontal well">
		<div class="control-group">
		<h3>Cierre Periodo</h3>
		<div class="controls">
			<?php echo $form->dropDownList($model,'Cierreperiodo', array('0'=>'Acceso','1'=>'Denegado',)); ?>
		    <?php echo $form->error($model,'Cierreperiodo'); ?>
		</div>
	</div>
	</div>
	</div>

	<div class="pull-left">
	<div class="form-horizontal well">
		<div class="control-group">
		<h3>Cierre Gestion</h3>
		<div class="controls">
			<?php echo $form->dropDownList($model,'Cierregestion', array('0'=>'Acceso','1'=>'Denegado',)); ?>
		    <?php echo $form->error($model,'Cierregestion'); ?>
		</div>
	</div>
	</div>
	</div>

	<div class="pull-right">
	<div class="form-horizontal well">
		<div class="control-group">
		<h3>Bitacora</h3>
		<div class="controls">
			<?php echo $form->dropDownList($model,'Bitacora', array('0'=>'Acceso','1'=>'Denegado',)); ?>
		    <?php echo $form->error($model,'Bitacora'); ?>
		</div>
	</div>
	</div>
	</div>

	<div class="pull-left">
	<div class="form-horizontal well">
		<div class="control-group">
		<h3>Comprobante</h3><?php echo $form->labelEx($model,'Crear',array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->dropDownList($model,'Comprobantecreate', array('0'=>'Acceso','1'=>'Denegado',)); ?>
		    <?php echo $form->error($model,'Comprobantecreate'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'Editar',array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->dropDownList($model,'Comprobanteupdate', array('0'=>'Acceso','1'=>'Denegado',)); ?>
		    <?php echo $form->error($model,'Comprobanteupdate'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'Anular',array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->dropDownList($model,'Comprobanteanular', array('0'=>'Acceso','1'=>'Denegado',)); ?>
	    	<?php echo $form->error($model,'Comprobanteanular'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'Autorizar',array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->dropDownList($model,'Comprobanteautorizado', array('0'=>'Acceso','1'=>'Denegado',)); ?>
		    <?php echo $form->error($model,'Comprobanteautorizado'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'Elaborado',array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->dropDownList($model,'Comprobanteelaborado', array('0'=>'Acceso','1'=>'Denegado',)); ?>
		    <?php echo $form->error($model,'Comprobanteelaborado'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'Revisado',array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->dropDownList($model,'Comprobanterevisado', array('0'=>'Acceso','1'=>'Denegado',)); ?>
	    	<?php echo $form->error($model,'Comprobanterevisado'); ?>
		</div>
	</div>
	</div>
   </div>

	
	
	

<?php $this->endWidget(); ?>

</div><!-- form -->