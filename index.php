<?php 
require_once('interfaces.php');
require_once('arbusto.php');
require_once('aldeano.php');
require_once('bancodepesca.php');
require_once('pesquero.php');

$arbusto=new Arbusto();
$arbusto2=new Arbusto();
$aldeano= new AldeanoChino("Juan","Abreu");
$aldeano2= new AldeanoFranco("Marco","Polo");

/*/ $aldeano->recolectar($arbusto);
$aldeano2->recolectar($arbusto2);

$pesquero = new Pesquero("Panchito", "Pérez");
echo "<br>";
$bancoDePesca = new BancoDePesca();
+
$pesquero->recolectar($bancoDePesca);/*/

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aldeanitos</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

</head>
<body>
<div class="bg-container"></div>
<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="index.php"><img src="img/age.png" alt="Logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aldeanosspagina.php">Aldeanos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pesquerospagina.php">Pesqueros</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Informacion</a>
      </li>
    </ul>
  </div>
</nav>

<main class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-6 transparent-bg margenprimero">
                <h1>Proyecto Aldeanos 1.0</h1>
                <p>Bienvenido al proyecto aldeanos, aqui podra ver que tan rapido puede recolectar los diferentes tipos de aldeanos los arbustos del AGE OF EMPIRE, asi como tambien buscar la Informacion
                    de que tan rapido puede recolectar los pesqueros los banco de pesca
                </p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-3 text-center imagenmargen transparent-bg">
            <a class="image-link" href="aldeanosspagina.php">
                <img src="img/aldeano1.png" alt="Imagen 1">
                <h2 class="margenprimero">Aldeanos</h2>
            </a>
        </div>
        <div class="col-3 text-center imagenmargen transparent-bg">
            <a class="image-link" href="pesquerospagina.php">
                <img src="img/pesquero.png" alt="Imagen 2">
                <h2 class="margenprimero" >Pesqueros</h2>
            </a>
        </div>
        <div class="col-3 text-center imagenmargen transparent-bg">
            <a class="image-link" href="#">
                <img src="img/signo.png" alt="Imagen 3">
                <h2 class="margenprimero">Informacion</h2>
            </a>
        </div>
    </div>
    
</main>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>