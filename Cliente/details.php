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
    <h4>Cliente</h4>
    <hr />
    <dl class="dl-horizontal">

        <dt>
            <b>Codigo de cliente:</b>
        </dt>

        <dd>'
            .$row["idCliente"] .'
        </dd>

        <dt>
            <b>Nombre:</b>
        </dt>

          <dd>'
            .$row["nombre"] .'
        </dd>

        <dt>
             <b>Apellido:</b>
        </dt>

         <dd>'
            .$row["apellido"] .'
        </dd>

        <dt>
            <b>Cedula:</b>
        </dt>

            <dd>'
            .$row["cedula"] .'
        </dd>
        
        <dt>
            <b>Telefono:</b>
        </dt>

            <dd>'
            .$row["telefono"] .'
        </dd>
        
           <dt>
            <b>Direccion:</b>
        </dt>

            <dd>'
            .$row["direccion"] .'
        </dd>
        
        
           <dt>
            <b>Email:</b>
        </dt>

            <dd>'
            .$row["email"] .'
        </dd>

         <dt>
            <b>Sexo:</b>
        </dt>

           <dd>'
            .$row["sexo"] .'
        </dd>

        
    </dl>
</div>


    </body>
</html>
';
      
    }
    



}
