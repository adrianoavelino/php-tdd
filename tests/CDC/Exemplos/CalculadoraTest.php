<?php
namespace CDC\Exemplos;

use CDC\Loja\Test\TestCase,
 CDC\Exemplos\Calculadora;

class CalculadoraTest extends TestCase 
{
    private $calculadora;
    
    protected function setUp() 
    {
        $this->calculadora = new Calculadora();
        parent::setUp();
    }

    public function testdeveSomarDoisNumerosPositivos() 
    {
        $this->assertInstanceOf('CDC\Exemplos\Calculadora', $this->calculadora);
    }
    
    
}
