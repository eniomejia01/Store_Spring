<?php 

use Model\ActiveRecord;
require __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

require 'funciones.php';
require 'config/database.php';
// require 'database.php';

// Conectar a la BD
$db = conectarDB();


ActiveRecord::setBD($db);




