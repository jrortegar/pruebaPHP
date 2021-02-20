<?php

require_once "conexionBD.php";

class UsersM
{
    static public function MostrarUsersM($tablaBD)
    {
        $pdo = ConexionBD::cBD()->prepare("SELECT id, contact_no, lastname, createdtime FROM $tablaBD");
        $pdo->execute();
        return $pdo->fetchAll();
        $pdo->close();
    }
}
