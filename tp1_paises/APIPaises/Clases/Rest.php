<?php

use NNV\RestCountries;

/*$restCountries = new RestCountries;

$argentina = $restCountries->byName('argentina');

echo json_encode($argentina);*/

class Rest
{
    protected $rest;

    public function __construct()
    {
        $this->rest = new RestCountries;
    } 
}


?>