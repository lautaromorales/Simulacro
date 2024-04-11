<?php
//CLASE VENTA
class Venta{
    private $numeroVenta;
    private $fechaVenta;
    private $colObjCliente;
    private $colObjMoto;
    private $precioFinal;
    //MÉTODO MAGICO CONSTRUCTOR
    public function __construct($numVenta, $dateVenta, $instCliente, $arrInstMoto, $montoFinal){
        $this->numeroVenta = $numVenta;
        $this->fechaVenta = $dateVenta;
        $this->colObjCliente = $instCliente;
        $this->colObjMoto = $arrInstMoto;
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
    public function getColObjMoto(){
        return $this->colObjMoto;
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
        $this->colObjMoto =$p_ObjMoto;
    }
    public function setPrecioFinal($p_Precio){
        $this-> precioFinal=$p_Precio;
    }

    //Metodo magico __toString
    public function __toString()
    {
        echo "Numero: ".$this->getNumVenta()."\nFecha de la venta: ".$this->getFecha()."\nCliente: ".$this->getColObjCliente()."\n La moto: ".$this->getColObjMoto()."\n El precio final es: ".$this->getPrecioFinal();
    }

    public function incorporarMoto($objMoto){
        $siSeVende = $objMoto->getEstadoMoto();
        if ($siSeVende){
            //INCORPORAR MOTO AL ARRAY
            //ACTUALIZAR VAR. INS. 
            //$precioInco es el precio de venta de la moto despues incorporarla al array.
            $incorpora = new Moto($objMoto);
            $precioInco = darPrecioVenta($siSeVende);
            $this->setPrecioFinal($precioInco);
        }
    }
}