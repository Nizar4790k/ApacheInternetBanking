<?php

    abstract class DbSet{
      
    private $serverName;
    private $userName;
    private $password;
    private $dbName;
    private $connection;




    private function  __constructor(){
        $serverName="localhost";
        $userName="root";
        $password="root12";
        $dbName="ApacheNetBanking";         
        
        echo "severName";
        
    }
    
    public   function getConnection(){
        return new mysql_li($serverName,$userName,$password);
    }


       public abstract function add($object);
       public abstract function find($id);
       public abstract function remove($object);
       public abstract function update($update);
       public abstract function getAll();
         
        
    }
    

     class ClienteTable extends DbSet{
        
         function __construct() {
             parent::_construct();
         }


         public function add($object) {
        
    }

    public function find($id) {
        
    }

    public function remove($object) {
        
    }

    public function update($object) {
        
    }

    public function getAll() {
        
    }

}

    

 class ApacheNetBankingDb{
    
    
    private $clienteTable;
    
  
    public function __construct() {
        $clienteTable= new ClienteTable();
       
    }
    
    public function getClienteTable(){
        return $clienteTable;
    }
    
    

    
    
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

