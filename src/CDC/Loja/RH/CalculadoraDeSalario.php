<?php

namespace CDC\Loja\RH;

use CDC\Loja\RH\Funcionario;

class CalculadoraDeSalario 
{
    public function calculaSalario(Funcionario $funcionario) 
    {
        if ($funcionario->getCargo() === TabelaCargos::DESENVOLVEDOR) {
            return $this->dezOuVintePorCentoDeDesconto($funcionario);
            
        } elseif ($funcionario->getCargo() === TabelaCargos::DBA || 
                $funcionario->getCargo() === TabelaCargos::TESTADOR) {
            return $this->quinzeOuVintePorCentoDeDesconto($funcionario);
        }
        
        throw new \RuntimeException("Tipo de funcionário inválido");
    }
    
    public function dezOuVintePorCentoDeDesconto(Funcionario $funcionario) 
    {
        if ($funcionario->getSalario() > 3000) {
            return $funcionario->getSalario() * 0.8;
        }
        return $funcionario->getSalario() * 0.9;
    }
        
    public function quinzeOuVintePorCentoDeDesconto(Funcionario $funcionario)
    {
        if ($funcionario->getSalario() < 2500 ) {
            return $funcionario->getSalario() * 0.85;
        }
        return $funcionario->getSalario() * 0.75;        
    }
    
}
