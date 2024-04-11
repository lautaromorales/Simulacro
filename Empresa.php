<?php
include_once 'Venta.php';
include_once 'Moto.php';
include_once 'Cliente.php';
//CLASE EMPRESA

class Empresa{
    private $denominacion;
    private $direccion;
    private $colObjClientes;
    private $colObjMotos;
    private $colObjVentasHechas;

    public function __construct($nomEmpresa, $adress, $arrObjCliente, $arrObjMotos, $arrColObjVentas){
        $this->denominacion = $nomEmpresa;+
        $this->direccion = $adress;
        $this->colObjClientes = $arrObjCliente;
        $this->colObjMotos = $arrObjMotos;
        $this->colObjVentasHechas = $arrColObjVentas;
    }

    public function getDenom(){
        return $this->denominacion;
    }
    public function getDireccion(){
        return $this->direccion;
    }
    public function getColObjClientes(){
        return $this->colObjClientes;
    }
    public function getColObjMotos(){
        return $this->colObjMotos;
    }
    public function getColObjVentas(){
        return $this->colObjVentasHechas;
    }

//Métodos mágicos "setters"

    public function setDenominacion($denominacion){
        $this->denominacion = $denominacion;
       return $this;
    }

    public function setDireccion($direccion){
        $this->direccion = $direccion;
        return $this;
    }


    public function setColObjClientes($colObjClientes){
        $this->colObjClientes = $colObjClientes;
        return $this;
    }

    public function setColObjMotos($colObjMotos){
        $this->colObjMotos = $colObjMotos;
        return $this;
    }

   
    public function setColObjVentasHechas($colObjVentasHechas){
        $this->colObjVentasHechas = $colObjVentasHechas;
        return $this;
    }
    // ***OTROS MÉTODOS***

    public function retornarVentasXCliente($tipoDoc, $numDoc){
        $cadaCliente = $this->colObjVentasHechas->getColObjClientes();
        $i = 0;
        foreach($cadaCliente as $ventas){
            if($ventas->getColObjClientes[$i] == $tipoDoc && ($ventas->getColObjClientes[$i] == $numDoc)){
                $numVentaCliente = $ventas->getNumVenta();
                $fechaVentaCliente = $ventas->getFecha();
                $motoVendida = $ventas->getColObjMoto;
                $monto = $ventas->getPrecioFinal();
                $cadaCliente = array();
                $cadaCliente [$i] = [$numVentaCliente, $fechaVentaCliente, $motoVendida, $monto];
                array_push($compraCliente, );
                $i++;
            }
        }
        return $cadaCliente;
    }

    public function retornarMoto($codigoMoto){
        $i=0;
        $motoBuscada= $this->colObjMotos[$i]->getCodigo();
        while($motoBuscada <> $codigoMoto ){
            $refMoto = null;
            $i++;
            $motoBuscada= $this->colObjMotos[$i]->getCodigo();
        }
        if ($motoBuscada == $codigoMoto){
            $refMoto = $motoBuscada;
        }
        return $refMoto;
    }
    public function registrarVenta($colCodigosMotos, $objCliente){
        $colObjMotos = 
        $apto = $objCliente->getBaja();
        if($apto){
         $i=0;
             foreach ($colCodigosMotos as $unCodigo){
             $objMoto_venta = $colObjMotos[$i]->getCodigo();
                 if ($unCodigo == $objMoto_venta ){
                 array_push($colObjMotosV, $objMoto_venta);
                 $esta_dispo = $colObjMotos[$i]->getEstadoMoto();
                 $suAniio = $colObjMotos[$i]->getAnioMoto();
                 $suCosto = $colObjMotos[$i]->getCosto();
                 }
             $i++;    
            }    
        }
        $importeFinal = $colObjMotos->darPrecioVenta($esta_dispo,$suAniio, $suCosto);

     return $importeFinal;
    }

}