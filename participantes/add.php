<?php
include_once("../config/config.php");
include("participantes.php");

if (isset($_POST) && !empty($_POST)){
        $patient = new participantes();

        $save = $patient->save($_POST);
        if ($save){
            $error = '<div class="alert alert-success" role="alert"> Paciente creado correctamente </div>';
        } else{
            $error = '<div class="alert alert-danger" role="alert" > Error al crear pciente </div>';
        }       
    }
        ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registrar sesion </title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    
</head>

<body>
<?php include('../menu.php') ?>
<div class="container">


<?php 
      if (isset($error)){
        echo $error;
      }
?>

<h2 class= "text-center nb2"> Registrar sesión  </h2>

<form method="POST" enctype="multipart/form-data">


<div class="row mb-2"> 
<div class="col">
<input type="tex" name="nombres" id="nombres" placeholder="nombres de los participantes" class="form-control" /> </div>
   
<div class="col"> 
<input type="number" name="edad" id="edad" placeholder="edad de los participantes" class="form-control" /> 
</div>
</div>
<div class="row mb-2"> 
<div class="col"> 
<input type="datetime-local" name="fecha" id="fecha" placeholder="fecha de la participacion" class="form-control" /> 
</div>

<div class="col"> 
<input type="tex" name="consentimiento" id="consentimiento" placeholder="consentimiento para indagar la informacion" class="form-control" /> 
</div>
</div>
<div class="row mb-2"> 
<div class="col"> 
<input type="tex" name="email" id="email" placeholder="correo electronico" class="form-control" /> 
</div>
</div>
<div class="row mb-2"> 
<div class="col"> 
<input type="tex" name="antecedentes" id="antecedentes" placeholder="antecedentes fisicos y psicologicos" class="form-control" /> 
</div>

<div class="col"> 
<input type="tex" name="situacion" id="situacion" placeholder="¿Ha estado en una situacion donde halla riesgo de suicidio?" class="form-control" /> 
</div>
</div>
<div class="row mb-2"> 
<div class="col"> 
<input type="tex" name="emergencia" id="emergencia" placeholder="¿cuales lineas de emergencia conoce?" class="form-control" /> 
</div>

<div class="col"> 
<input type="tex" name="genero" id="genero" placeholder="genero de los participantes" class="form-control" /> 
</div>


</div>
<button class="btn btn-success"> registrar

</button>
</form>

</div>
</body>
</html>