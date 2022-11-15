<?php

class MvcController{

    public function plantilla(){

        include "views/template.php";
    }

    public function enlacePaginasController(){

        $linksController = $_GET['action'];
        $respuesta = EnlacePaginas :: enlacePaginasModel($linksController);

        include $respuesta;
    }
}
?>