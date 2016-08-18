<?php
$this->breadcrumbs=array(
	'Backup'=>array('index'),
);?>
<h1>Administrar Backup de base de datos</h1>

<?php $this->renderPartial('_list', array(
		'dataProvider'=>$dataProvider,
));
?>
