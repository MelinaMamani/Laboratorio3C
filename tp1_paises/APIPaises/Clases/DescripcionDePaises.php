<?php

require_once "Rest.php";
require_once "IMetodos.php";

class DescripcionDePaises extends Rest implements IMetodos
{
    protected $name;
    protected $region;
    protected $subregion;
    protected $capital;
    public $pais;

    public function __construct($nombre)
    {
        parent::__construct();
        $this->pais = $this->rest->byName($nombre);

        $this->name = $this->pais[0]->name;
        $this->region = $this->pais[0]->region;
        $this->subregion = $this->pais[0]->subregion;
        $this->capital = $this->pais[0]->capital;
    }

    public function MostrarPais()
    {
        return "Pais pedido: ".$this->name."<br>";
    }

    public function MostrarRegion()
    {
        return "Region: ".$this->region."<br>";
    }

    public function MostrarSubregion()
    {
        return "Subregion: ".$this->subregion."<br>";
    }

    public function MostrarCapital()
    {
        return "Capital: ".$this->capital."<br><br>";
    }

}

?>