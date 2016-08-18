<?php
/* @var $this PrivilegiosController */
/* @var $model Privilegios */

$this->breadcrumbs=array(
	'Privilegios'=>array('index'),
	$model->Id,
);
?>

<h1>Detalle de Privilegios</h1>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Id',
		'Idusuario',
		'Areacreate',
		'Areaupdate',
		'Areadelete',
		'Asientocreate',
		'Bancocreate',
		'Bancoupdate',
		'Bancodelete',
		'Chequecreate',
		'Chequeupdate',
		'Chequedelete',
		'Comprobantecreate',
		'Comprobanteupdate',
		'Comprobanteanular',
		'Comprobanteautorizado',
		'Comprobanteelaborado',
		'Comprobanterevisado',
		'Costosareacreate',
		'Costosareaupdate',
		'Costosareadelete',
		'Cuentacreate',
		'Cuentaupdate',
		'Entidadcreate',
		'Entidadupdate',
		'Entidaddelete',
		'Facturacompracreate',
		'Facturacompraupdate',
		'Facturacompradelete',
		'Facturaventacreate',
		'Facturaventaanular',
		'Gestioncreate',
		'Gestionupdate',
		'Periodofiscalcreate',
		'Periodofiscalupdate',
		'Tipocambiocreate',
		'Tipocambioupdate',
		'Tipocambiodelete',
		'Tipocomprobantecreate',
		'Tipocomprobanteupdate',
		'Tipocomprobantedelete',
		'Usuariocreate',
		'Usuarioupdate',
		'Usuariodelete',
		'Cierreperiodo',
		'Cierregestion',
		'Bitacora',
	),
)); ?>
