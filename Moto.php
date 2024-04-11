<?php
include_once 'Cliente.php';
include_once 'Empresa.php';
include_once 'Venta.php';
//CLASE MOTO
class Moto{
    private $codigo;
    private $costo;
    private $descripcion;
    private $por_inc_anual;
    private $activa;
    private $anioFabricacion;

    public function __construct($codMoto, $costoMoto, $descMoto, $porcMoto, $activaMoto, $anioMoto){
        $this->codigo = $codMoto;
        $this->costo = $costoMoto;
        $this->descripcion = $descMoto;
        $this->por_inc_anual = $porcMoto;
        $this->activa = $activaMoto;
        $this->anioFabricacion = $anioMoto;
    }


    public function getCodigo(){
        return $this->codigo ;
    }
    public function getCosto(){
        return $this->costo;
    }
    public function getDescripcion(){
        return $this->descripcion;
    }
    public function getPorcentaje(){
        return $this->por_inc_anual;
    }
    public function getEstadoMoto(){
        return $this->activa;
    }
    public function getAnioMoto(){
        return $this->anioFabricacion;
    }
    //** MÉTODOS MÁGICOS "GETTERS" **//
    public function setCodigo($p_codigo){
        $this->codigo =$p_codigo;
    }
    public function setCosto($p_Costo){
        $this->costo = $p_Costo;
    }
    public function setDesccripcion($p_Descripcion){
        $this->descripcion =$p_Descripcion;
    }
    public function setPorcentaje($p_Porcentaje){
        $this->por_inc_anual =$p_Porcentaje;
    }
    public function setEstadoMoto($p_Estado){
        $this->activa=$p_Estado;
    }
    public function setAnio($p_Anio){
        $this->anioFabricacion =$p_Anio;
    }

    //** MÉTODO MÁGICO "toString" **//
    public function __toString()
    {
        return "Código: ".$this->getCodigo()."\n Costo: ".$this->getCosto()."\n Descripcion: ".$this->getDescripcion().
        "\n Porcentaje de incremento anual: ".$this->getPorcentaje()."\n Estado para la venta: ".$this->getEstadoMoto().
        "\n Año de Fabricación: ".$this->getAnioMoto();
    }

    public function darPrecioVenta($disponible, $anioMoto, $costo){//disponible u objCliente?
        $_compra = $costo;
        $anio = 2024 - $anioMoto;
        $por_inc_anual = $this->por_inc_anual;
        if($disponible){
            $_venta = $_compra + $_compra*($anio*$por_inc_anual);
        }else{
            $_venta = -1;
        }
        return $_venta;
    }
}