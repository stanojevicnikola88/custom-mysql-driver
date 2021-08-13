<?php

require 'vendor/autoload.php';

use CustomDrv\Migration;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/../../..");
$dotenv->load();

$migration = new Migration();

$migration->createTable('users', [
    "id" => "int",
    "email" => "varchar(191)",
    "password" => "varchar(191)",
]);
