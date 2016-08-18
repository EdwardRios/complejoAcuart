<?php
/* @var $this PrivilegiosController */
/* @var $data Privilegios */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Id), array('view', 'id'=>$data->Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Idusuario')); ?>:</b>
	<?php echo CHtml::encode($data->Idusuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Areacreate')); ?>:</b>
	<?php echo CHtml::encode($data->Areacreate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Areaupdate')); ?>:</b>
	<?php echo CHtml::encode($data->Areaupdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Areadelete')); ?>:</b>
	<?php echo CHtml::encode($data->Areadelete); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Asientocreate')); ?>:</b>
	<?php echo CHtml::encode($data->Asientocreate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Bancocreate')); ?>:</b>
	<?php echo CHtml::encode($data->Bancocreate); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Bancoupdate')); ?>:</b>
	<?php echo CHtml::encode($data->Bancoupdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Bancodelete')); ?>:</b>
	<?php echo CHtml::encode($data->Bancodelete); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Chequecreate')); ?>:</b>
	<?php echo CHtml::encode($data->Chequecreate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Chequeupdate')); ?>:</b>
	<?php echo CHtml::encode($data->Chequeupdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Chequedelete')); ?>:</b>
	<?php echo CHtml::encode($data->Chequedelete); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Comprobantecreate')); ?>:</b>
	<?php echo CHtml::encode($data->Comprobantecreate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Comprobanteupdate')); ?>:</b>
	<?php echo CHtml::encode($data->Comprobanteupdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Comprobanteanular')); ?>:</b>
	<?php echo CHtml::encode($data->Comprobanteanular); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Comprobanteautorizado')); ?>:</b>
	<?php echo CHtml::encode($data->Comprobanteautorizado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Comprobanteelaborado')); ?>:</b>
	<?php echo CHtml::encode($data->Comprobanteelaborado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Comprobanterevisado')); ?>:</b>
	<?php echo CHtml::encode($data->Comprobanterevisado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Costosareacreate')); ?>:</b>
	<?php echo CHtml::encode($data->Costosareacreate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Costosareaupdate')); ?>:</b>
	<?php echo CHtml::encode($data->Costosareaupdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Costosareadelete')); ?>:</b>
	<?php echo CHtml::encode($data->Costosareadelete); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Cuentacreate')); ?>:</b>
	<?php echo CHtml::encode($data->Cuentacreate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Cuentaupdate')); ?>:</b>
	<?php echo CHtml::encode($data->Cuentaupdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Entidadcreate')); ?>:</b>
	<?php echo CHtml::encode($data->Entidadcreate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Entidadupdate')); ?>:</b>
	<?php echo CHtml::encode($data->Entidadupdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Entidaddelete')); ?>:</b>
	<?php echo CHtml::encode($data->Entidaddelete); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Facturacompracreate')); ?>:</b>
	<?php echo CHtml::encode($data->Facturacompracreate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Facturacompraupdate')); ?>:</b>
	<?php echo CHtml::encode($data->Facturacompraupdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Facturacompradelete')); ?>:</b>
	<?php echo CHtml::encode($data->Facturacompradelete); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Facturaventacreate')); ?>:</b>
	<?php echo CHtml::encode($data->Facturaventacreate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Facturaventaanular')); ?>:</b>
	<?php echo CHtml::encode($data->Facturaventaanular); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Gestioncreate')); ?>:</b>
	<?php echo CHtml::encode($data->Gestioncreate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Gestionupdate')); ?>:</b>
	<?php echo CHtml::encode($data->Gestionupdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Periodofiscalcreate')); ?>:</b>
	<?php echo CHtml::encode($data->Periodofiscalcreate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Periodofiscalupdate')); ?>:</b>
	<?php echo CHtml::encode($data->Periodofiscalupdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tipocambiocreate')); ?>:</b>
	<?php echo CHtml::encode($data->Tipocambiocreate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tipocambioupdate')); ?>:</b>
	<?php echo CHtml::encode($data->Tipocambioupdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tipocambiodelete')); ?>:</b>
	<?php echo CHtml::encode($data->Tipocambiodelete); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tipocomprobantecreate')); ?>:</b>
	<?php echo CHtml::encode($data->Tipocomprobantecreate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tipocomprobanteupdate')); ?>:</b>
	<?php echo CHtml::encode($data->Tipocomprobanteupdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tipocomprobantedelete')); ?>:</b>
	<?php echo CHtml::encode($data->Tipocomprobantedelete); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Usuariocreate')); ?>:</b>
	<?php echo CHtml::encode($data->Usuariocreate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Usuarioupdate')); ?>:</b>
	<?php echo CHtml::encode($data->Usuarioupdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Usuariodelete')); ?>:</b>
	<?php echo CHtml::encode($data->Usuariodelete); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Cierreperiodo')); ?>:</b>
	<?php echo CHtml::encode($data->Cierreperiodo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Cierregestion')); ?>:</b>
	<?php echo CHtml::encode($data->Cierregestion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Bitacora')); ?>:</b>
	<?php echo CHtml::encode($data->Bitacora); ?>
	<br />

	*/ ?>

</div>