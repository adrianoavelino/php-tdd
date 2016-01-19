<?php
namespace CDC\Loja\Test\Builder;

use CDC\Loja\Test\TestCase;

class TestandoConstrutorBuilderTest extends TestCase {
    private $carrinho;
    
    public function testConstruirCarrinhoBuilder() 
    {
        $this->carrinho = (new CarrinhoDeComprasBuilder())->comItens(200,300);
        $this->carrinho->cria();
    }
    
    
    
}
