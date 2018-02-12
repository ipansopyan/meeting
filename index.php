<?php
session_start();
require_once "vendor/autoload.php";

use App\Route;

$kernel = new Route($_GET['meeting']);

$controller = $kernel->getController();

 ?>
