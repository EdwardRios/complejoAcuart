<?php
$this->breadcrumbs=array(
	'Backup'=>array('backup'),
	'Restaurar',
);?>
<h1><?php echo  $this->action->id; ?></h1>

<p>
	<?php if(isset($error)) echo $error; else echo 'Done';?>
</p>
<p> <?php echo CHtml::link('Inicio',Yii::app()->HomeUrl)?></p>
