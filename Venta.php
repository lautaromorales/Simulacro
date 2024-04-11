<?php
include_once 'Moto.php';
include_once 'Cliente.php';
include_once 'Empresa.php';
//CLASE VENTA
class Venta{
    private $numeroVenta;
    private $fechaVenta;
    private $colObjCliente;
    private $colObjMotoV;
    private $precioFinal;
    //MÉTODO MAGICO CONSTRUCTOR
    public function __construct($numVenta, $dateVenta, $instCliente, $arrInstMoto, $montoFinal){
        $this->numeroVenta = $numVenta;
        $this->fechaVenta = $dateVenta;
        $this->colObjCliente = $instCliente;
        $this->colObjMotoV = $arrInstMoto;
        $this->precioFinal = $montoFinal;
    }
    //método magico "get" para cada tributo de la clase
    public function getNumVenta(){
        return $this->numeroVenta;
    }
    public function getFecha(){
        return $this->fechaVenta;
    }
    public function getColObjCliente(){
        return $this->colObjCliente;
    }
    public function getColObjMotoV(){
        return $this->colObjMotoV;
    }
    public function getPrecioFinal(){
        return $this->precioFinal;
    }

    //método mágico "get" para cada tributo de la clase

    public function setNumVenta($p_numVenta){
        $this-> numeroVenta=$p_numVenta;
    }
    public function setFecha($p_fecha){
        $this->fechaVenta =$p_fecha;
    }
    public function setObjCliente($p_objCliente){
        $this->colObjCliente=$p_objCliente;
    }
    public function setObjMoto($p_ObjMoto){
        $this->colObjMotoV =$p_ObjMoto;
    }
    public function setPrecioFinal($p_Precio){
        $this-> precioFinal=$p_Precio;
    }

    //Metodo magico __toString
    public function __toString()
    {
        echo "Numero: ".$this->getNumVenta()."\nFecha de la venta: ".$this->getFecha()."\nCliente: ".$this->getColObjCliente()."\n La moto: ".$this->getColObjMotoV()."\n El precio final es: ".$this->getPrecioFinal();
    }

    public function incorporarMoto($objMoto){
        $siSeVende = $objMoto->getEstadoMoto();
        if ($siSeVende){
            //INCORPORAR MOTO AL ARRAY
            //ACTUALIZAR VAR. INS. 
            array_push($colObjMotosV, $objMoto);
            //Seteo del precio final
            //$precioInco es el precio de venta de la moto despues incorporarla al array.
            $j = count($colObjMotosV);
            $v_anio = $objMoto->getAnioMoto();
            $v_costo = $objMoto->getCosto();
            $precioInco = $colObjMotosV[$j] ->darPrecioVenta($siSeVende, $v_anio, $v_costo);
            $this->setPrecioFinal($precioInco);
        }
    }
}