<?php

    
$pdo=new PDO("mysql:host=127.0.0.1;dbname=apachenetbanking","root", "root12");
         $sql = "INSERT INTO CLIENTE(nombre,apellido,cedula,direccion,telefono,email,sexo) VALUES(?,?,?,?,?,?,?)";
             
  
         echo  ($_SERVER['DOCUMENT_ROOT'].'/Models/ApacheNetBankingDb.php');
       
         
         
            $sth = $pdo->prepare($sql)
                    ->execute(["Nizar","Sanchez","20",
                           "casa que dice se alquila","00","aa@gmail.com",
                            true]);
    

?>