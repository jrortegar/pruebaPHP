<?php
require_once "../Controlador/contar.php";
require_once "../Modelo/usersM.php";
$contador = new Contador();
$respuesta = $contador->contar();
echo json_encode($respuesta);