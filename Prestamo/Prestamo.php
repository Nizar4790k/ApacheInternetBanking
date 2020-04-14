<?php

 class Prestamo{

     private $idPrestamo;
     private $monto;
     private $tiempo;
     private $unidadTiempo;
     private $idCliente;
    
    public function __construct($monto,$tiempo,$unidadTiempo,$idCliente) {
        $this->monto=$monto;
        $this->tiempo=$tiempo;
        $this->unidadTiempo=$unidadTiempo;
        $this->idCliente=$idCliente;
    }
     
    public function getMonto(){
        return $this->monto;
    }
    
    public function setMonto($monto){
        $this->monto=$monto;
    }
    
     public function setTiempo($tiempo){
        $this->tiempo=$tiempo;
    }
    
    public function getTiempo(){
        return $this->tiempo;
    }
    
    public function setUnidadTiempo($unidadTiempo){
        $this->unidadTiempo=$unidadTiempo;
    }
    
    public function getUnidadTiempo(){
        return $this->unidadTiempo;
    }
    
     public function setIdCliente($idCliente){
        $this->unidadTiempo=$unidadTiempo;
    }
    
    public function getIdCliente(){
        return $this->idCliente;
    }
    
     public function getIdPrestamo(){
        return $this->idPrestamo;
    }
    
}