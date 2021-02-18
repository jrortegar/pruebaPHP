<?php
class UsersC{
    public function mostrarUsers(){
        $tablaBD = "user";
        $respuesta = UsersM::MostrarUsersM($tablaBD); 

        foreach($respuesta as $key=>$value){
            echo '<tr>
                <td>'.$value["id"].'</td>
                <td>'.$value["contact_no"].'</td>
                <td>'.$value["lastname"].'</td>
                <td>'.$value["createdtime"].'</td>
            </tr>';
        }
    }
}