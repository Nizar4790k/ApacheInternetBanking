<?php

    include  ( __DIR__."/Prestamo.php");

   $pdo=new PDO("mysql:host=127.0.0.1;dbname=apachenetbanking","root", "root12");
        
         $prestamo = new Prestamo($_POST["monto"],$_POST["tiempo"],$_POST["unidadTiempo"],$_POST["idCliente"]);
        
         echo $prestamo->getMonto();
         echo $prestamo->getTiempo();
         echo $prestamo->getUnidadTiempo();
         echo $prestamo->getIdCliente();
         
         
         $sql = "INSERT INTO Prestamo(monto,tiempo,unidadTiempo,idCliente) VALUES(?,?,?,?)";
       
 
         /*
           $sth = $pdo->prepare($sql)
                    ->execute([$_POST["nombre"],$_POST["apellido"],$_POST["cedula"],
                                        $_POST["direccion"], $_POST["telefono"],$_POST["email"],
                                         $_POST["sexo"]=="masculino"]);
           */
         
            $sth = $pdo->prepare($sql)
                    ->execute([$prestamo->getMonto(),$prestamo->getTiempo(),$prestamo->getUnidadTiempo(),$prestamo->getIdCliente()]);
             
           
           



