<?php

class Cliente{
    
    private $idCliente;
    private $nombre;
    private $apellido;
    private $cedula;
    private $direccion;
    private $telefono;
    private $email;
    
    public function __construct($nombre,$apellido,$cedula,$direccion,$telefono,$email) {
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->cedula=$cedula;
        $this->direccion=$direccion;
        $this->telefono=$telefono;
        $this->email=$email;
        
    }
    
    
    
}
