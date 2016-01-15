<?php
namespace CDC\Loja\Carrinho;

use CDC\Loja\Test\TestCase,
 CDC\Loja\Carrinho\CarrinhoDeCompras,
 CDC\Loja\Produto\Produto;

class MaiorPrecoTest extends TestCase 
{
    public function testDeveRetornarZeroSeCarrinhoVazio() 
    {
        $carrinho = new CarrinhoDeCompras();

        $valor = $carrinho->maiorValor();
        
        $this->assertEquals(0, $valor, null, 0.0001);
        
    }
    
    public function testeDeveRetornarValorItemSeCarrinhoCom1Elemento() 
    {
        $carrinho = new CarrinhoDeCompras();
        $carrinho->adiciona(new Produto("Geladeira", 900.00, 1));
        
        $valor = $carrinho->maiorValor();
        
        
        $this->assertEquals(900.00, $valor, null, 0.0001);
    }
    
    public function testDeveRetornarMaiorValorSeCarrinhoComMuitosElementos() 
    {
        $carrinho = new CarrinhoDeCompras();
        
        $carrinho->adiciona(new Produto("Geladeira", 900.00, 1));
        $carrinho->adiciona(new Produto("Fogão", 1500.00, 1));
        $carrinho->adiciona(new Produto("Máquina de lavar", 750.00, 1));
        
        $valor = $carrinho->maiorValor();
        
        $this->assertEquals(1500.00, $valor, null, 0.0001);
    }
}
