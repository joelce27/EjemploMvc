<?php

/*fromController/controlador principal importa recursos*/
require("./model/Coche.php");
require("./controller/CocheController.php");
error_reporting(0);

/*01 controller es un objeto tipo: coche con 4 atributos estáticos*/
$controller = new CocheController;

/*02 enruta cualquier petición URL, hacia controlador principal index.php  */
$home="http://localhost/EjemploMvc/index.php/";
// enruta una petición URL hacia un componente de petición
echo "Ejemplo de los componetes de petición, <br> elija una opción y escríbala en la barra de direcciones del navegador:";
echo "<br><pre>   ",$home;
echo "<br>   ";
echo "http://localhost/EjemploMvc/index.php/verRegistro/1</pre>";

/*03 remueve raiz/home de la petición url */
$ruta = str_replace($home, "", $_SERVER["REQUEST_URI"]);

/*04 serializa la petición */
$array_ruta = array_filter(explode("/", $ruta));

/*05 filtra y enruta tipo de petición*/
if ( $array_ruta[3]=="verRegistro" && is_numeric($array_ruta[4]) )
{
	/*petición especializada*/
    $controller->verRegistro($array_ruta[4]);
}
else
{
    /*petición general*/
    $controller->index();
} 
?>