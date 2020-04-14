<?php

    include  ( __DIR__."/Cliente.php");

   $pdo=new PDO("mysql:host=127.0.0.1;dbname=apachenetbanking","root", "root12");
        
         $cliente = new Cliente($_POST["nombre"],$_POST["apellido"],$_POST["cedula"],$_POST["direccion"],
               $_POST["telefono"],$_POST["email"],$_POST["sexo"]);
   
          
         
         $sql = "INSERT INTO CLIENTE(nombre,apellido,cedula,direccion,telefono,email,sexo) VALUES(?,?,?,?,?,?,?)";
       
 
         /*
           $sth = $pdo->prepare($sql)
                    ->execute([$_POST["nombre"],$_POST["apellido"],$_POST["cedula"],
                                        $_POST["direccion"], $_POST["telefono"],$_POST["email"],
                                         $_POST["sexo"]=="masculino"]);
           */
         
               $sth = $pdo->prepare($sql)
                    ->execute([$cliente->getNombre(),$cliente->getApellido(),$cliente->getCedula(),
                                        $cliente->getDireccion(),$cliente->getTelefono(),$cliente->getEmail(),
                                         $cliente->getSexo()]);
          
               header( 'Location: index.php' ) ;
           
           
