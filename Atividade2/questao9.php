<?php

interface PagamentoInterface 
{
    public function processaPagamento(float $valor):void;
}

abstract class Pagamento implements PagamentoInterface
{
    protected float $valor;

    public function __construct(float $valor)
    {
        $this->valor = $valor;
    }

    public function getValor(): float
    {
        return $this->valor;
    }


    abstract public function processaPagamento( float $valor):void;
}


class PagamentoCartao extends Pagamento
{
    public function processaPagamento(float $valor): void
    {
        echo 'Processando pagamento no valor de R$' . number_format($valor, 2, ',', '.') . ' via Cartão de Crédito' . PHP_EOL;        
    }
}

class PagamentoPix extends Pagamento
{
    public function processaPagamento(float $valor): void
    {
        echo 'Processando pagamento no valor de R$' . number_format($valor, 2, ',', '.') . ' via PIX';        
    }
}

$pagamento = new PagamentoCartao(199.75);
$pagamento2 = new PagamentoPix(300.50);
$pagamento->processaPagamento($pagamento->getValor());
$pagamento2->processaPagamento($pagamento2->getValor());

?>