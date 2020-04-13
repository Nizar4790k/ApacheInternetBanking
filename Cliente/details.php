<?php




$idCliente=$_GET["idCliente"];
getDetails($idCliente);
 echo "<a href=index.php>Volver al inicio</a>";

function getDetails($idCliente){


    $pdo=new PDO("mysql:host=127.0.0.1;dbname=apachenetbanking","root", "root12");
     
    
   $data = $pdo->query("SELECT * FROM CLIENTE WHERE idCliente= $idCliente")->fetchAll();
  

    /*
    $sth = $pdo->prepare("SELECT * FROM CLIENTE WHERE idCliente= ?") ->execute([$idCliente]);
    $data=$sth->fetchAll();        No funciona
   */
    
   
    
     foreach ($data as $row){
        echo
         'Codigo de cliente:'.$row["idCliente"]."<br/>".
        'Nombre:'.$row["nombre"]."<br/>".
        'Apellido:'.$row["apellido"]."<br/>".
        'Cedula:'.$row["cedula"]."<br/>".
        'Direccion:'.$row["direccion"]."<br/>".
        'Telefono:'.$row["telefono"]."<br/>".
        'Email:'.$row["email"]."<br/>".
        'Sexo:'.$row["sexo"]."<br/>";
    }
    



}
