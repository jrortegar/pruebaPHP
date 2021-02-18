<?php
class Modelo{
    static public function RutasModelo($rutas){
        if ($rutas=="inicio"){
            $pagina = "Vista/modulos/".$rutas.".php";
        }
        else if($rutas=="index"){
            $pagina = "Vista/modulos/inicio.php";
        }else{
            $pagina = "Vista/modulos/inicio.php";
        }
        return $pagina;
    }
}
?>