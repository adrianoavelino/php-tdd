<?php
namespace CDC\Loja\RH;


class Cargo {

    private $cargos = array(
        "desenvolvedor" => "CDC\Loja\RH\DezOuVintePorCento",
        "dba" => "CDC\Loja\RH\DezOuVinteECincoPorCento",
        "testador" => "CDC\Loja\RH\DezOuVinteECincoPorCento"
    );
    private $regra;
    
    public function __construct($regra) 
    {
        if (array_key_exists($regra, $this->cargos)) {
            $this->regra = $this->cargos[$regra];
        } else {
            throw new \RuntimeException("Cargo inválido");
        }
    }
    
    public function getRegra() 
    {
        return new $this->regra();
    }
}
