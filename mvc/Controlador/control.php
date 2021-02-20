<?php
require_once "../Controlador/usersC.php";
require_once "../Modelo/usersM.php";
$usuarios = new UsersC();
$resultado = $usuarios->mostrarUsers();
echo json_encode($resultado);
