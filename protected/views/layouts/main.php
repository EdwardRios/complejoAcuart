<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      body{
        padding-top: 60px; 
      }
    </style>
</head>
<body>
	

<?php $this->widget('bootstrap.widgets.TbNavbar', array(
    'type'=>'inverse', // null or 'inverse'
    'brandUrl'=>'#',
    'collapse'=>true, // requires bootstrap-responsive.css
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'Inicio','icon'=>'home', 'url'=>array('/site/index')),
                array('label'=>'Cliente', 'icon'=>'icon-user', 'url'=>'#','visible'=>!Yii::app()->user->isGuest , 'items'=>array(
                    '---',
                    array('label'=>'Gest Cliente', 'icon'=>'th', 'url'=>array('/cliente/create'),'visible'=>!Yii::app()->user->isGuest && Yii::app()->user->tipo != 1),
                    array('label'=>'Gest Cliente', 'icon'=>'th', 'url'=>array('/cliente/admin'),'visible'=>!Yii::app()->user->isGuest && Yii::app()->user->tipo == 1),
                    '---',
                )),
               
                array('label'=>'Reserva', 'icon'=>'icon-edit', 'url'=>'#','visible'=>!yii::app()->user->isGuest, 'items'=>array(
                    '---',
                    array('label'=>'Gest Reserva', 'icon'=>'icon-pencil', 'url'=>array('/reserva/create'),'visible'=>!Yii::app()->user->isGuest && Yii::app()->user->tipo != 1),
                    array('label'=>'Gest Reserva', 'icon'=>'icon-pencil', 'url'=>array('/reserva/admin'),'visible'=>!Yii::app()->user->isGuest && Yii::app()->user->tipo == 1),
                    '---',
                )),

                 array('label'=>'Administrar','icon'=>'icon-cog','url'=>'#','visible'=>!Yii::app()->user->isGuest && !yii::app()->user->tipo != 1, 'items'=>array(
                 '---',
                 //  array('label'=>'Backup', 'icon'=>'icon-refresh', 'url'=>array('/default/index')),
                    
                  //  array('label'=>'Usuarios', 'icon'=>'user', 'url'=>array('/usuario/index'),'visible'=>!Yii::app()->user->isGuest && Yii::app()->user->tipo != 1),
                    array('label'=>'Usuarios', 'icon'=>'user', 'url'=>array('/usuario/admin'),'visible'=>!Yii::app()->user->isGuest && Yii::app()->user->tipo == 1),
                    array('label'=>'Usuarios', 'icon'=>'user', 'url'=>array('/usuario/view'),'visible'=>!Yii::app()->user->isGuest && Yii::app()->user->tipo != 1),
                    
                    array('label'=>'Horario', 'icon'=>'icon-edit', 'url'=>array('/horario/index'),'visible'=>!Yii::app()->user->isGuest && Yii::app()->user->tipo == 1),
                    array('label'=>'Area', 'icon'=>'icon-pencil', 'url'=>array('/Areadeportiva/admin'),'visible'=>!Yii::app()->user->isGuest && Yii::app()->user->tipo == 1),
                    array('label'=>'Area', 'icon'=>'icon-pencil', 'url'=>array('/Areadeportiva/index'),'visible'=>!Yii::app()->user->isGuest && Yii::app()->user->tipo == 2),
                    '---',
                )),   


                 array('label'=>'Servicio', 'icon'=>'icon-edit', 'url'=>'#','visible'=>!Yii::app()->user->isGuest && !yii::app()->user->tipo != 1, 'items'=>array(
                    '---',
                   /* array('label'=>'Gest Reserva', 'icon'=>'icon-pencil', 'url'=>array('/reserva/admin')),

                    '---',*/
                    array('label'=>'Gest Servicio', 'icon'=>'icon-pencil', 'url'=>array('/servicio/create'),'visible'=>!Yii::app()->user->isGuest && Yii::app()->user->tipo != 1),
                    array('label'=>'Gest Servicio', 'icon'=>'icon-pencil', 'url'=>array('/servicio/admin'),'visible'=>!Yii::app()->user->isGuest && Yii::app()->user->tipo == 1),
                    '---',
                )),

                array('label'=>'Acerca', 'icon'=>'tag', 'url'=>array('/site/page', 'view'=>'about'),'visible'=>yii::app()->user->isGuest),
            ),
        ),
        
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'htmlOptions'=>array('class'=>'pull-right'),
            'items'=>array(
                array('label'=>'Bienvenido ('.Yii::app()->user->name.')','icon'=>'user','url'=>'#' , 'visible'=>!Yii::app()->user->isGuest, 'items'=>array(
                	'---',
                	array('label'=>'Cambiar contraseña', 'icon'=>'lock', 'url'=>array('/site/change')),
                    array('label'=>'Cerrar Sesion', 'icon'=>'off', 'url'=>array('/site/logout')),
                    '---',
                )),

            ),
        ),




        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'htmlOptions'=>array('class'=>'pull-right'),
            'items'=>array(
            	array('label'=>'Registrarse', 'icon'=>'edit','url'=>array('/usuario/create'), 'visible'=>yii::app()->user->isGuest),
                array('label'=>'Iniciar Sesion','icon'=>'user','url'=>'#' , 'items'=>array(
                    '---',
                    array('label'=>'Inicio de Sesion', 'icon'=>'user', 'url'=>array('/site/login')),
                    '---',
                )),
            ),
        ),
    ),
)); ?>



	<div class="container">
		<?php if(isset($this->breadcrumbs)):?>
			<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
				'links'=>$this->breadcrumbs,
				)); ?><!-- breadcrumbs -->
			<?php endif?>

			<?php echo $content; ?>
		</div>
    
	</body>
</html>
