<?php

class EnlacePaginas{

    public function enlacePaginasModel($linksModel){

        if($linksModel == "inicio"||
           $linksModel == "login"||
           $linksModel == "asignaturas"||
           $linksModel == "contactenos"){

            $module = "views/modules/".$linksModel.".php";

           }

        return $module;

    }
}

?>