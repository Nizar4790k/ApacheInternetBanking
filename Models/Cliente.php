<?php

class Cliente{
    
    private $idCliente;
    private $nombre;
    private $apellido;
    private $cedula;
    private $direccion;
    private $telefono;
    private $email;
    private $sexo;
    
    public function __construct($nombre,$apellido,$cedula,$direccion,$telefono,$emai,$sexo) {
        $this->$nombre=$nombre;
        $this->apellido=$apellido;
        $this->cedula=$cedula;
        $this->direccion=$direccion;
        $this->telefono=$telefono;
        $this->email=$email;
        $this->sexo=$sexo;
        
    }
    
    public function  getNombre(){
        return $this->nombre;
    }
    
      public function  getApellido(){
        return $this->apellido;
    }
    
     public function  getCedula(){
        return $this->cedula;
    }
    
      public function  getDireccion(){
        return $this->direccion;
    }
    
      public function  getTelefono(){
        return $this->telefono;
    }
    
        public function  getEmail(){
        return $this->telefono;
    }
    
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    
      public function setApellido($apellido){
        $this->apellido=$apellido;
    }
    
      public function setCedula($cedula){
        $this->cedula=$cedula;
    }
   
 
    
      public function setTelefono($telefono){
        $this->telefono=$telefono;
    }
 
      public function setDireccion($direccion){
        $this->direccion=$direccion;
    }
       public function setSexo($sexo){
        $this->sexo=$sexo;
    }
    
}
