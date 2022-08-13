<?php
include('../config/config.php');
include('participantes.php');
$p = new participantes();

$allpatients= $p->getAll();

if (isset($_GET['id']) && !empty($_GET['id'])) {
$remove = $p->remove($_GET['id']);
if ($remove){
header('Location: ' . ROOT . 'participantes/index.php');
} else {
$msj = "<div class='alert alert-danger' rol='alert' > Error al eliminar agenda. </div>";   
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Lista de participantes </title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


</head>
<body>
<?php include('../menu.php') ?>
    <div class="container">
        <h2 class="text-center mb-5">lista de pacientes</h2>
        
        <div class="row">
            <?php
            while ($patient = mysqli_fetch_object($allpatients)){
                $input = $patient->fecha;
                echo "<div class='col-6'>";
                echo "<div class='border border-info p-2'>";
                echo "<h5> Nombres: 
                    $patient->nombres 
                    </h5>"; 
                    echo " <p> <b>Edad:</b>$patient->edad  ";
                    echo " <p> <b>Fecha:</b> ".date("D", strtotime($input)) . " " . date("d-M-Y", strtotime($input)). " </p> ";
                    
                echo "<div class='center'> <a class='btn btn-success' href='". ROOT ."/participantes/edit.php?id=$patient->id' >Modificar</a> - <a class='btn btn-danger' href='". ROOT ."/participantes/index.php?id=$patient->id' >Eliminar</a> </div>";

                echo "</div>";
                echo "</div>";  
            }
            ?>
            </div>
        </div>

</body>
</html>