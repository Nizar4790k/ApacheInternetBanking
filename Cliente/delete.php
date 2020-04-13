<?php



$idCliente=$_GET["idCliente"];

delete($idCliente);



function delete($idCliente){
    
     $pdo=new PDO("mysql:host=127.0.0.1;dbname=apachenetbanking","root", "root12");
    
    $sql = "DELETE FROM CLIENTE WHERE idCliente=?";
    
   $data = $pdo->prepare($sql)->execute([$idCliente]);
   
   header("Location: index.php");
   
    
   
   
}




/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

