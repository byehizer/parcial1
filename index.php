<?php 
require_once('interfaces.php');
require_once('arbusto.php');
require_once('aldeano.php');
require_once('bancodepesca.php');
require_once('pesquero.php');

$arbusto=new Arbusto();
$aldeano= new Aldeano("Juan","Abreu");

$aldeano->recolectar($arbusto);

$pesquero = new Pesquero("Juan", "Pérez");
echo "<br>";
$bancoDePesca = new BancoDePesca();

$pesquero->recolectar($bancoDePesca);

?>