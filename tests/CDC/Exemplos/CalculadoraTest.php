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
        $this->assertEquals(4, $this->calculadora->soma(2, 2));
    }
    
    public function testDeveSomarPositivoComNegativo() 
    {
        $this->assertEquals(4, (new Calculadora())->soma(6, -2));
    }
    
    public function testDeveSomarNegativoComPositivo() {
        $this->assertEquals(-4, $this->calculadora->soma(-6, 2));
    }
    
    public function testDeveSomarDoisNumerosNegativos() {
        $this->assertEquals(-4, $this->calculadora->soma(-2, -2));
    }
    
    
    public function testDeveSomarComZero() {
        $this->assertEquals(4, $this->calculadora->soma(4, 0));
        $this->assertEquals(4, $this->calculadora->soma(0, 4));
    }
    
    
    
    
    
    
}
