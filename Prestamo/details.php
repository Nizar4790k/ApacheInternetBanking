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
         echo'<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        
    </head>
    <body>
       <h2>Details</h2>

<div>
    <h4>Prestamo</h4>
    <hr />
    <dl class="dl-horizontal">

        <dt>
            <b>Codigo de prestamo:</b>
        </dt>

        <dd>'
            .$row["idPrestamo"] .'
        </dd>

        <dt>
            <b>Monto:</b>
        </dt>

          <dd>'
            .$row["monto"] .'
        </dd>

        <dt>
             <b>Tiempo:</b>
        </dt>

         <dd>'
            .$row["tiempo"] .'
        </dd>

        <dt>
            <b>Modalidad de tiempo:</b>
        </dt>

            <dd>'
            .$row["unidadTiempo"] .'
        </dd>
        
        <dt>
            <b>Cuota:</b>
        </dt>

            <dd>'
            .$row["monto"]/$row["tiempo"] .$row["unidadTiempo"].'
        </dd>
        
           <dt>
            <b>Codigo de Cliente:</b>
        </dt>

            <dd>'
            .$row["idCliente"] .'
        </dd>
        
        

        
    </dl>
</div>


    </body>
</html>
';
        
    }
    



}
