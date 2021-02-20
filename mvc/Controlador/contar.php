<?php

class Contador
{
    public function contar()
    {
        $tablaBD = "user";
        $respuesta = UsersM::contarUsersM($tablaBD);

        return $respuesta[0];
    }
    
}
