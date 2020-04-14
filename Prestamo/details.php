<?php




$idPrestamo=$_GET["idPrestamo"];
getDetails($idPrestamo);
 echo "<a href=index.php>Volver al inicio</a>";

function getDetails($idPrestamo){


    $pdo=new PDO("mysql:host=127.0.0.1;dbname=apachenetbanking","root", "root12");
     
    
   $data = $pdo->query("SELECT * FROM PRESTAMO WHERE idPrestamo= $idPrestamo")->fetchAll();
  

    /*
    $sth = $pdo->prepare("SELECT * FROM CLIENTE WHERE idCliente= ?") ->execute([$idCliente]);
    $data=$sth->fetchAll();        No funciona
   */
    
   
    
     foreach ($data as $row){
        echo
         'Codigo de prestamo:'.$row["idPrestamo"]."<br/>".
         'Monto:'.$row["monto"]."<br/>".
        'Tiempo:'.$row["tiempo"]."<br/>".
        'Modalidad de tiempo:'.$row["unidadTiempo"]."<br/>".
         'Cuota:'.($row["monto"]/$row["tiempo"]) .$row["unidadTiempo"] ."<br/>".     
        'Codigo de Cliente:'.$row["idCliente"]."<br/>";
        
    }
    



}
