<?php

class Funcionario {

    protected  $nome;
    protected $salario;
    protected $cargo;
    
    public function __construct($nome, $salario, $cargo) {
        $this->nome = $nome;
        $this->salario = $salario;
        $this->cargo = $cargo;
    }
    
    function getNome() {
        return $this->nome;
    }

    function getSalario() {
        return $this->salario;
    }

    function getCargo() {
        return $this->cargo;
    }


}
