<?php
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
}