<?php
namespace CDC\Loja\Carrinho;

use CDC\Loja\Test\TestCase,
 CDC\Loja\Produto\Produto,
 CDC\Loja\Carrinho\CarrinhoDeCompras,
 CDC\Loja\Carrinho\MaiorPreco;

class MaiorPrecoTest extends TestCase 
{
    public function testDeveRetornarZeroSeCarrinhoVazio() 
    {
        $carrinho = new CarrinhoDeCompras();
        $algoritmo = new MaiorPreco();
        $valor = $algoritmo->encontra($carrinho);
        
        $this->assertEquals(0, $valor, null, 0.0001);
        
    }
    
    public function testeDeveRetornarValorItemSeCarrinhoCom1Elemento() 
    {
        $carrinho = new CarrinhoDeCompras();
        $carrinho->adiciona(new Produto("Geladeira", 900.00, 1));
        
        $algoritmo = new MaiorPreco();
        $valor = $algoritmo->encontra($carrinho);
        
        
        $this->assertEquals(900.00, $valor, null, 0.0001);
    }
    
    public function testDeveRetornarMaiorValorSeCarrinhoComMuitosElementos() 
    {
        $carrinho = new CarrinhoDeCompras();
        
        $carrinho->adiciona(new Produto("Fogão", 1, 1500.00));
        $carrinho->adiciona(new Produto("Geladeira", 1, 900.00));
        $carrinho->adiciona(new Produto("Máquina de lavar", 1, 750.00));
        
        $algoritmo = new MaiorPreco();
        $valor = $algoritmo->encontra($carrinho);
        
        $this->assertEquals(1500.00, $valor, null, 0.0001);
    }
}
