<?php
class Viaje{
    private $costoViaje; //int
    private $costosAbonados;//int
    private $maxPasajeros; //int
    private $pasajeros; //array

    public function __construct($costoViaje, $costosAbonados, $maxPasajeros, $pasajeros){
        $this->costoViaje = $costoViaje;
        $this->costosAbonados = $costosAbonados;
        $this->maxPasajeros = $maxPasajeros;
        $this->pasajeros = $pasajeros;
    }
    public function getCostoViaje(){
        return $this->costoViaje;
    }
    public function getCostosAbonados(){
        return $this->costosAbonados;
    }
    public function getMaxPasajeros(){
        return $this->maxPasajeros;
    }
    public function getPasajeros(){
        return $this->pasajeros;
    }
    public function setCostoViaje($costoViaje){
        $this->costoViaje = $costoViaje;
    }
    public function setCostosAbonados($costosAbonados){
        $this->costosAbonados = $costosAbonados;
    }
    public function setMaxPasajeros($maxPasajeros){
        $this->maxPasajeros = $maxPasajeros;
    }
    public function setPasajero($pasajeros){
        $this->pasajeros = $pasajeros;
    }
    public function hayPasajesDisponibles(){
        $disponibilidad = false;
        if(count($this->getPasajeros()) < $this->getMaxPasajeros()){
            $disponibilidad = true;
        }
        return $disponibilidad;
    }

    public function venderPasaje($objPasajero){
        if ($this->hayPasajesDisponibles()) {
            $colPasajeros = $this->getPasajeros();
        array_push($colPasajeros, $objPasajero);
        $this->setPasajeros($colPasajeros);
        //calculo de costo de viaje
        $abonoFinal= $this->getCostosAbonados() + $this->calculoFinal($objPasajero);
        $this->setCostosAbonados($abonoFinal);
        $precioAbonarPasajero = $this->calculoFinal($objPasajero);
        } else {
            $precioAbonarPasajero = 0;
        }

        return $precioAbonarPasajero;
    }

    private function calculoFinal($objPasajero){
        $incrementoPorcentaje = $objPasajero->darPorcentajeIncremento();
        $precioFinal = $this->getCostoViaje() + ($this->getCostoViaje() * $incrementoPorcentaje / 100);
        return $precioFinal;
    }

}
?>