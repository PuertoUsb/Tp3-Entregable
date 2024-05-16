<?php
class PasajerosServicio extends Pasajero {  
private $requiereSillaDeRuedas; // boolean 
private $requiereAsistencia; // boolean 
private $requiereComidaEspecial; // boolean 

public function __construct($nombre, $nroAsiento, $nroTicket, $requiereSillaDeRuedas, $requiereAsistencia, $requiereComidaEspecial) {
    parent::__construct($nombre, $nroAsiento, $nroTicket);
    $this->requiereSillaDeRuedas = $requiereSillaDeRuedas;
    $this->requiereAsistencia = $requiereAsistencia;
    $this->requiereComidaEspecial = $requiereComidaEspecial;
}

public function getRequiereSillaDeRuedas() {
    return $this->requiereSillaDeRuedas;
}

public function getRequiereAsistencia() {
    return $this->requiereAsistencia;
}

public function getRequiereComidaEspecial() {
    return $this->requiereComidaEspecial;
}

public function setRequiereSillaDeRuedas($requiereSillaDeRuedas) {
    $this->requiereSillaDeRuedas = $requiereSillaDeRuedas;
}

public function setRequiereAsistencia($requiereAsistencia) {
    $this->requiereAsistencia = $requiereAsistencia;
}

public function setRequiereComidaEspecial($requiereComidaEspecial) {
    $this->requiereComidaEspecial = $requiereComidaEspecial;
}

public function darPorcentajeIncremento(){
    if($this->getRequiereSillaDeRuedas() && $this->getRequiereAsistencia() && $this->getRequiereComidaEspecial()){
        $incremento = 30;

    } elseif ($this->getRequiereSillaDeRuedas() || $this->getRequiereAsistencia() || $this->getRequiereComidaEspecial()){
        $incremento = 15;
    } 
    return $incremento;
}




}

?>