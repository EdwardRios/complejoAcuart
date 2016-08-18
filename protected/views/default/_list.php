<?php 
	$this->widget('bootstrap.widgets.TbButton',array(
		'type'=>'primary',
		'label'=>'Crear Backup',
		'url'=>array('create')
	))
	;?>
	<?php 
	$this->widget('bootstrap.widgets.TbButton',array(
		'type'=>'primary',
		'label'=>'Subir Backup',
		'url'=>array('upload')
	))
	;?>
	<?php 
	$this->widget('bootstrap.widgets.TbButton',array(
		'type'=>'primary',
		'label'=>'Restaurar',
		'url'=>array('restore')
	))
	;?>

<?php $this->widget('bootstrap.widgets.TBGridView', array(
	'id' => 'install-grid',
	'dataProvider' => $dataProvider,
	'columns' => array(
		'name',
		'size',
		'create_time',
		array(
			'class' => 'bootstrap.widgets.TbButtonColumn',
			'template' => '{Descarga}{Restaurar}{delete}',
			  'buttons'=>array
			    (
			        'Descarga' => array
			        (
			        	'imageUrl'=>Yii::app()->request->baseUrl.'/images/downloa.png',
			            'url'=>'Yii::app()->createUrl("default/download", array("file"=>$data["name"]))',
			        ),
			        'Restaurar' => array
			        (
			        	'imageUrl'=>Yii::app()->request->baseUrl.'/images/restore.png',
			            'url'=>'Yii::app()->createUrl("default/restore", array("file"=>$data["name"]))',
					),
					'delete' => array
			        (
			            'url'=>'Yii::app()->createUrl("default/delete", array("file"=>$data["name"]))',
			        ),
			    ),		
		),
	),
)); ?>