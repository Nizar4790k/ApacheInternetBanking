<?php

    abstract class DbSet{
      
    private $dsn;
    private $user;
    private $password;
    private $connection;



    protected function  __constructor(){
        
        
        
    }
    
    public   function getConnection(){
       
        
        return  new PDO("mysql:host=127.0.0.1;dbname=apachenetbanking","root", "root12");
    }


       public abstract function add($object);
       public abstract function find($id);
       public abstract function remove($object);
       public abstract function update($object);
       public abstract function getAll();
         
        
    }
    

     class ClienteTable extends DbSet{
        
     public function __construct() {
             parent::__constructor();
         
             
         }

         public function getConnection(): \PDO {
             return  parent::getConnection();
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

