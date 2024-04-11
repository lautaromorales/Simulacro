<?php
include_once 'Cliente.php';
include_once 'Moto.php';
include_once 'Empresa.php';
include_once 'Venta.php';

//test de la clase empresa
//crear 2 instancias de la clase cliente

$objCliente1 = new Cliente("Juan", "Puerta", true, "D.N.I", 454545);
$objCliente2 = new Cliente ("Lorena", "Fuentes", false, "Pasaporte", 7890123);
$colObjCliente = array ($objCliente1, $objCliente2);

$i = 0;
$colObjMotos = array ();
$colObjMotos [$i] = new Moto ("11", 2230000, "Benelli Imperiale 4000", 85, true, 2022);
$colObjMotos[$i+1] = new Moto(12, 584000, 2021, "Zanella Zr 150 Ohc", true, 2021);
$colObjMotos[$i+2] = new Moto(13, 999900, "Zanrlla Patagonian Eagle 250", 55, false, 2023);
$colObjMotos[3] = new Moto(0, 0, "Null", 0, null, 0);
//valor de $i = 2
$colObjMotosV = array ();
$colObjVentasHechas = array();

$objEmpresa =new Empresa("Alta gama", "Av. Argentina 123", $colObjCliente, $colObjMotos,$colObjVentasHechas);
$colCodigosMoto = array ();
$colCodigosMoto[0]= $colObjMotos[0]->getCodigo();
$colCodigosMoto[1]= $colObjMotos[1]->getCodigo();
$colCodigosMoto[2]= $colObjMotos[2]->getCodigo();
$colCodigosMoto[3]= $colObjMotos[2]->getCodigo();

$transaccion = $this->registrarVenta($colCodigosMoto, $objCliente2);
$transaccion = $this->registrarVenta($colCodigosMoto[3], $objCliente2);
echo $transaccion;

$tipo_Id = $objCliente1->getTipoDoc();
$num_id = $objCliente1->getNumDoc();
$verVentas = $objEmpresa->retornarVentasXCliente($tipo_Id, $num_id);
echo $verVentas;

$tipo_Id = $objCliente2->getTipoDoc();
$num_id = $objCliente2->getNumDoc();
$verVentas = $objEmpresa->retornarVentasXCliente($tipo_Id, $num_id);
echo $verVentas;

echo $objEmpresa;
