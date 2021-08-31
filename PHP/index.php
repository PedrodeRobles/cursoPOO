<?php

require_once("Car.php");
require_once("uberX.php");
require_once("UberPool.php");
require_once("Account.php");
require_once("User.php");
require_once("Driver.php");
require_once("UberVan.php");

$uberVan = new UberVan("GDL231", new Account("Jose Roberto", "JSR569"), "Nissan", "Versa");
$uberVan->setPassenger(4);
$uberVan->printDataCar();

$uberX = new UberX("CVB123", new Account("Andres Herrera", "AHR123"), "Chevrolet", "Spark");
$uberX->printDataCar();

$uberPool = new UberPool("GTI197", new Account("Jose Roberto", "JSR569"), "Dodge", "Attitude");
$uberPool->printDataCar();

$user = new User("Jose Roberto", "44.356.986", "joderoberto@gmail.com", "Gkldls26236");
$user->printDataAccount();

$driver = new Driver("Carlos Totolo", "98.699.248", "carlostotolo@gmail.com", "EWPadr12");
$driver->printDataAccount();
