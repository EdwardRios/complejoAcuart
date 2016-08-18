<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<div class="form-horizontal well">
    <strong>Bienvenidos al Complejo Recreativo "ACUART"</strong>  Toda la facilidad para el uso del complejo a un clic de distancia.
    <div class="pull-right">
    Visitanos: 
    <a href="https://www.facebook.com/ComplejoRecreativoAcuart/"  original-title="facebook"><img src="images/soc1.png"  alt="facebook"></a>
    <a href="https://twitter.com/@ComplejoAcuart"  original-title="Delicious"><img src="images/soc2.png"  alt="Delicious"></a>
    </div><br/> 
</div>

<?php $this->widget('bootstrap.widgets.TbCarousel', array(
    'items'=>array(
        array('image'=>'images/1.1.jpg', 'label'=>'Quieres llevar a tu empresa a otro nivel..??', 'caption'=>'Con nuestro Sistema Web podras elevar tus niveles de productividad al maximo, gracias a su eficiencia y su fiabilidad.'),
        array('image'=>'images/2.jpg', 'label'=>'Sistema Portable..!!', 'caption'=>'Ya que esta desarrollado en entorno web, es muy portable ya que se puede ingresar desde cualquier dispositivo que tenga una conexion a internet y un explorador actualizado.'),
        array('image'=>'images/3.jpg', 'label'=>'Basta..!! de realizar la reserva de forma manual.', 'caption'=>'Ahora la facilidad llega a tus manos, con nuestro sistema Web, te olvidaras de las morosas inscripciones manuales y las perdidas de informacion que ocasionaba.'),
        array('image'=>'images/1.4.jpg', 'label'=>'Buena toma de desiciones..!!', 'caption'=>'Reserva ya tu espacio en nuestro gran complejo ..!!'),
    ),
)); ?>


<div class="row"><center><br/><br/>
Copyringh &copy;<?php echo date('Y'); ?> by clubsoft<br/> 
All Rights Reserved.<br/>
Taller de Grado I<br/>

