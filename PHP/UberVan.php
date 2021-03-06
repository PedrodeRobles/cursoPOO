<?php

require_once("./Car.php");


class UberVan extends Car {
    public $typeCarAccepted;
    public $material;

    public function __construct($license, $driver, $typeCarAccepted, $material) {
        parent::__construct($license, $driver);

        $this->typeCarAccepted = $typeCarAccepted;
        $this->material = $material;
    }

    //POLIFORMISMO Sobreescribiendo metodo setPassenger de la clase padre Car
    public function setPassenger($passenger){
        if ($passenger == 4) {
            $this->passenger = $passenger;
        } else {
            echo "Necesitas asignar 6 pasajeros";
        }
    }
}

