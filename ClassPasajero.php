<?php 
class Pasajero{
private $nombre; //string
private $nroAsiento; //int
private $nroTicket; //int

public function __construct($nombre, $nroAsiento, $nroTicket){
    $this->nombre = $nombre;
    $this->nroAsiento = $nroAsiento;
    $this->nroTicket = $nroTicket;
}

public function getNombre(){
    return $this->nombre;
}

public function getNroAsiento(){
    return $this->nroAsiento;
}

public function getNroTicket(){
    return $this->nroTicket;
}

public function setNombre($nombre){
    $this->nombre = $nombre;
}

public function setNroAsiento($nroAsiento){
    $this->nroAsiento = $nroAsiento;
}

public function setNroTicket($nroTicket){
    $this->nroTicket = $nroTicket;
}

public function  darPorcentajeIncremento(){
    $incremento = 10;
    return $incremento;
    }
}
?>