<?php
namespace CDC\Loja\FluxoDeCaixa;


class Pedido 
{

    private $cliente;
    private $valorTotal;
    private $quantidaDeItens;
    
    public function __construct($cliente, $valorTotal, $quantidaDeItens) 
    {
        $this->cliente = $cliente;
        $this->valorTotal = $valorTotal;
        $this->quantidaDeItens = $quantidaDeItens;
    }
    
    function getCliente() 
    {
        return $this->cliente;
    }

    function getValorTotal() 
    {
        return $this->valorTotal;
    }

    function getQuantidaDeItens() 
    {
        return $this->quantidaDeItens;
    }


}
