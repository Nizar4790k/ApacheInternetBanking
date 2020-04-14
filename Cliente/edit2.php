<?php
 include  ( __DIR__."/Cliente.php");
 




    $pdo=new PDO("mysql:host=127.0.0.1;dbname=apachenetbanking","root", "root12");
 
    
       $cliente = new Cliente($_POST["nombre"],$_POST["apellido"],$_POST["cedula"],$_POST["direccion"],
               $_POST["telefono"],$_POST["email"],$_POST["sexo"]);
    
       $cliente->setIdCliente( $_POST["codigoCliente"]);
       
    
       $pdo->prepare("UPDATE CLIENTE SET nombre=?,apellido=?,cedula=?,direccion=?,telefono=?, email =?, sexo=? WHERE idCliente= ?")
               ->execute([$cliente->getNombre(),$cliente->getApellido(),$cliente->getCedula(),
                   $cliente->getDireccion(),$cliente->getTelefono(),$cliente->getEmail(),$cliente->getSexo()
                       ,$cliente->getIdCliente()]);
         
                
           echo $cliente->getNombre();
           
            header( 'Location: index.php' ) ;
       
       
 
       
 
    

 
    
               
 
