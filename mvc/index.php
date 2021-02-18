<?php

require_once "Controlador/rutasC.php";
require_once "Controlador/usersC.php";
require_once "Modelo/rutasM.php";
require_once "Modelo/usersM.php";

$rutas = new RutasControlador();
$rutas -> plantilla();