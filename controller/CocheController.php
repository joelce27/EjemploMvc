<?php
class CocheController
{
    var $coches;
    /**define un objeto tipo coche con 5 atributos*/
    function __construct()
    {
        $this->coches = [
            1 => new Coche("1","Volkswagen","Jetta","blanco","Luis"),
            2 => new Coche("2","Ford","Fiesta","rojo","Patricia"),
            3 => new Coche("3","Hyundai","Grand i10","azul","Eduardo"),
            4 => new Coche("4","Seat","Ibiza","amarillo","Diana"),
            5 => new Coche("5","Nissan","Versa","gris","Pedro")
        ];
    }
    /**asigna atributos de un objeto tipo coche a rowset
     *renderiza 5 atributos de un objeto tipo coche en una tabla
     */
    public function index()
    {
        $rowset = $this->coches;
        require("view/todosRegistros.php");
    }

    /**
	*renderiza un registro pasado por valor,
     * sino renderiza vista principal
    */
    //public function verRegistro($id)
	public function verRegistro($id)
    {
        if (array_key_exists($id,$this->coches))
        {
            $row = $this->coches[$id];
            require("view/unRegistro.php");
        }
        else
        {
            $this->index();
        }
    }
}
