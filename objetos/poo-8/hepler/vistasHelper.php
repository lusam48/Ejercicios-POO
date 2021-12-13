<?php
namespace App\Helper;
class vistasHelper
{
    public function vista($vista,$datos){

        $archivo = "view/$vista.php";
        require($archivo);

    }
}