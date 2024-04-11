<?php
include_once 'Moto.php';
include_once 'Empresa.php';
include_once 'Venta.php';
//CLASE CLIENTE

class CLiente{
    private $nombre;
    private $apellido;
    private $dadoDeBaja;
    private $tipoDoc;
    private $nroDoc;
    
    //** MÉTODO MÁGICO CONSTRUCT  **//
    public function __construct($name, $pApellido, $pBaja, $tipoId, $nroId){
        $this->nombre = $name;
        $this->apellido = $pApellido;
        $this->dadoDeBaja = $pBaja;
        $this->tipoDoc = $tipoId;
        $this->nroDoc = $nroId;        
    }
    //** MÉTODOS MÁGICOS "GETTERS" **//
    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getBaja(){
        return $this->dadoDeBaja;
    }
    public function getTipoDoc(){
        return $this->tipoDoc;
    }
    public function getNumDoc(){
        return $this->nroDoc;
    }

    //** MÉTODOS MÁGICOS "GETTERS" **//
    public function setNombre($p_Nombre){
        $this->nombre = $p_Nombre;
    }
    public function setApellido ($p_Apellido){
        $this->apellido = $p_Apellido;
    }
    public function setBaja ($p_Baja){
        $this->dadoDeBaja = $p_Baja;
    }
    public function setTipoDoc($p_Tipo_Doc){
        $this->tipoDoc = $p_Tipo_Doc;
    }
    public function setNumDoc ($p_Num_Doc){
        $this->nroDoc = $p_Num_Doc;
    }

    //** MÉTODO MÁGICO __toString **//
    public function __toString(){
        if ($this->getBaja()){
            $estadoCliente = "Alta activa";
        }else{
            $estadoCliente = "Dado de baja";
        }
        return "Nombre: ".$this->getNombre()."\n Apellido: ".$this->getApellido()."\n Estado: ".$estadoCliente.
        "\n Número de documento: ".$this->getNumDoc()."\n Tipo de documento ".$this->getTipoDoc();       
    }
    

}

