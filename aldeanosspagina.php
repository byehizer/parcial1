<?php 
require_once('interfaces.php');
require_once('arbusto.php');
require_once('aldeano.php');

$arbusto=new Arbusto();
$arbusto2=new Arbusto();

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
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Aldeanos</a>
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

<main class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6 transparent-bg">
            <h2 class="text-center mb-4">Que aldeano deseas Probar?</h2>
            <form method="post" action="#">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre">
                </div>
                <div class="form-group">
                    <label for="apellido">Apellido</label>
                    <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingrese su apellido">
                </div>
                <div class="form-group">
                    <label for="tipo_aldeano">Tipo de Aldeano</label>
                    <select class="form-control" id="tipo_aldeano" name="tipo_aldeano">
                        <option value="franco">Aldeano Franco</option>
                        <option value="chino">Aldeano Chino</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>


<?php 

    if(isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["tipo_aldeano"])){
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $tipo=$_POST["tipo_aldeano"];
       

        if($tipo=="franco"){
           $aldeano=new AldeanoFranco($nombre,$apellido);
           $texto=$aldeano->recolectar($arbusto);
           echo"<div class='row justify-content-center mt-3 mb-3'>
                    <div class='col-md-6 text-center transparent-bg'>
                        <img src='img/francos.jpg' class='img-fluid' alt='Imagen'>
                        <h2 class='mt-3'>Aldeano Franco</h2> 
                        <p>$texto</p>                                                                                                                                                                                                               
                    </div>
                </div>";
        }
        else{
            $aldeano=new AldeanoChino($nombre,$apellido);
            $texto=$aldeano->recolectar($arbusto2);
            echo"<div class='row justify-content-center mt-3 mb-3'>
                     <div class='col-md-6 text-center transparent-bg'>
                         <img src='img/chino.jpg' class='img-fluid' alt='Imagen'>
                         <h2 class='mt-3'>Aldeano Chino</h2> 
                         <p>$texto</p>                                                                                                                                                                                                               
                     </div>
                 </div>";
        }

    }


?>

</main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>