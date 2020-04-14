<?php

require_once "Rest.php";

class DetalleDePais extends DescripcionDePaises
{
    protected $detalles;

    public function __construct($nombre)
    {
        parent::__construct($nombre);
        $this->detalles = $this->pais;
    }

    public function MostrarTodo()
    {
        return parent::MostrarPais().parent::MostrarRegion().
        parent::MostrarSubregion().parent::MostrarCapital().
        $this->MostrarDetalles();

    }

    public function MostrarDetalles()
    {
        return "Todos los detalles: ".json_encode($this->detalles)."<br>";
    }
}
?>