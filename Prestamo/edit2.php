<?php
 include  ( __DIR__."/Prestamo.php");
 




    $pdo=new PDO("mysql:host=127.0.0.1;dbname=apachenetbanking","root", "root12");
 
    
       $prestamo = new Prestamo($_POST["monto"],$_POST["tiempo"],$_POST["unidadTiempo"],$_POST["idCliente"]);

  
       
    
       $pdo->prepare("UPDATE PRESTAMO SET monto=?,tiempo=?,unidadTiempo=?,idCliente=?  WHERE idPrestamo= ?")
               ->execute([$prestamo->getMonto(),$prestamo->getTiempo(),$prestamo->getUnidadTiempo(),$prestamo->getIdCliente(),$_POST["codigoPrestamo"]]);
         
                
            header( 'Location: index.php' ) ;
       
       
 