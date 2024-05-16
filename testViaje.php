<?php
include "ClassViaje.php";
include "ClassPasajero.php";
include "ClassPasajeroVIP.php";
include "ClassPasajeroServicios.php";

// Crear instancia de Viaje
// Costo del viaje: 1000, Max pasajeros: 5

// Crear pasajeros
$pasajero1 = new Pasajero("Juan", 1, "T001");
$pasajero2 = new Pasajero("Manuel", 4, "T010");
$pasajeroVIP = new PasajeroVIP("Maria", 2, "T002", "VIP123", 400);
$pasajeroEspecial = new PasajerosServicio("Pedro", 3, "T003", true, true, true);
$colPasajeros = array($pasajero1);
$viaje = new Viaje(1000, 6, 6,$colPasajeros); 

// Vender pasajes
echo "Costo pasaje pasajero estándar: " . $viaje->venderPasaje($pasajero2) . "\n";
echo "Costo pasaje pasajero VIP: " . $viaje->venderPasaje($pasajeroVIP) . "\n";
echo "Costo pasaje pasajero con necesidades especiales: " . $viaje->venderPasaje($pasajeroEspecial) . "\n";

// Sumar costos abonados
echo "Suma total de costos abonados: " . $viaje->getCostosAbonados() . "\n";



?>  