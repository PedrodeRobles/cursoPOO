<?php

require_once("Car.php");

class UberX extends Car {
    public $brand;
    public $model;

    public function __construct($license, $driver, $brand, $model){
        parent::__construct($license, $driver);     //Esto seria el "super()" de JS para la herencia de la clase
        $this->brand = $brand;
        $this->model = $model;
    }

    //Polimorfismo
    public function printDataCar(){
        echo "
        Licencia: $this->license 
        Driver: {$this->driver->name} 
        Número de pasajeros: $this->passenger
        Marca: $this->brand
        Modelo: $this->model

        
        ";
    }
}