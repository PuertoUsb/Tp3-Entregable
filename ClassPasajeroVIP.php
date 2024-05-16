<?php 
class PasajeroVIP extends Pasajero {
    private $nroViajeroFrecuente; //int
    private $cantDeMillas; //int

    public function __construct($nombre, $nroAsiento, $nroTicket,  $nroViajeroFrecuente, $cantDeMillas){
        parent::__construct($nombre, $nroAsiento, $nroTicket);
        $this->nroViajeroFrecuente = $nroViajeroFrecuente;
        $this->cantDeMillas = $cantDeMillas;
    }


    public function getNroViajeroFrecuente(){
        return $this->nroViajeroFrecuente;
    }
    public function getCantDeMillas(){
        return $this->cantDeMillas;
    }
    public function setNroViajeroFrecuente($nroViajeroFrecuente){
        $this->nroViajeroFrecuente = $nroViajeroFrecuente;
    }
    public function setCantDeMillas($cantDeMillas){
        $this->cantDeMillas = $cantDeMillas;
    }

    public function darPorcentajeIncremento(){
        $incremento = 35;
        if ($incremento > 300 ){
            $incremento =+ 30;
        }
        return $incremento;
    }
    

        
    




}

?>