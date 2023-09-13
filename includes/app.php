<?php 
require __DIR__ . '/../vendor/autoload.php';

// Variables de entorno
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__ . "./../");
$dotenv->load();

require 'functions.php';
require 'database.php';

// Conectarnos a la base de datos
// use Model\ActiveRecord;
// ActiveRecord::setDB($db);