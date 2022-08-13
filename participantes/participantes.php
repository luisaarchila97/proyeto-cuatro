
<?php
include('../config/config.php');
include('../config/database.php');

class participantes{
       public $conn; /* LLAMO LA CONEXION DE MI BASE DE DATOS */
   
       function __construct(){
           $db= new Database(); /* LA CONEXION A LA BD SIEMPRE SE RENUEVE O ESTE EN LINEA */
           $this->conn = $db->connectToDatabase();
       }



function save($params){
       $nombres = $params['nombres'];
       $edad = $params['edad'];
       $fecha = $params['fecha'];
       $consentimiento = $params['consentimiento'];
       $email = $params['email'];
       $antecedentes= $params['antecedentes'];
       $situacion = $params['situacion'];
       $emergencias = $params['emergencia'];
       $genero = $params['genero'];
       
       $insert = "INSERT INTO participantes VALUES (NULL, '$nombres', '$edad', '$fecha', '$consentimiento', '$email', '$antecedentes', '$situacion', '$emergencias', '$genero')";
       return mysqli_query($this->conn, $insert);
       }

        function getALL(){
              $sql = "SELECT * FROM participantes";
              return mysqli_query ($this->conn, $sql); 
        } 
        function getOne($id){
              $sql = "SELECT * FROM participantes WHERE id = $id";
              return mysqli_query($this->conn, $sql);
          } 
          
          
          function update($params){
            $nombres = $params['nombres'];
            $edad = $params['edad'];
            $fecha = $params['fecha'];
            $consentimiento = $params['consentimiento'];
            $email = $params['email'];
            $antecedentes= $params['antecedentes'];
            $situacion = $params['situacion'];
            $emergencias = $params['emergencia'];
            $genero = $params['genero'];
            $id = $params['id'];
          
              $update = " UPDATE participantes SET nombres='$nombres', edad='$edad', fecha='$fecha', consentimiento='$consentimiento', email='$email', antecedentes='$antecedentes', situacion='$situacion', emergencia='$emergencia', genero='$genero' WHERE id = $id";
              return mysqli_query($this->conn, $update);
              }
          



        function remove($id){
              $remove ="DELETE FROM participantes WHERE id = $id";
              return mysqli_query($this->conn, $remove);
          }
      

}


        ?>