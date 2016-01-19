<?php

namespace CDC\Loja\RH;

use CDC\Loja\RH\Funcionario;

class CalculadoraDeSalario 
{
    public function calculaSalario(Funcionario $funcionario) 
    {
        if ($funcionario->getCargo() === TabelaCargos::DESENVOLVEDOR) {

            if ($funcionario->getSalario() > 3000) {
                return $funcionario->getSalario() * 0.8;
            }
            return $funcionario->getSalario() * 0.9;
        } elseif ($funcionario->getCargo() === TabelaCargos::DBA || 
                $funcionario->getCargo() === TabelaCargos::TESTADOR) {
            
            if ($funcionario->getSalario() < 2500 ) {
                return $funcionario->getSalario() * 0.85;
            }
            return $funcionario->getSalario() * 0.75;
        }
        
        throw new \RuntimeException("Tipo de funcionário inválido");
    }
        
    
}
