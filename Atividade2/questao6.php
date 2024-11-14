<?php 

class Cliente
{
    private ?string $nome;

    public function __construct(?string $nome)
    {
        $this->nome = $nome;
    }

    public function getNome() : ?string
    {
        return $this->nome;
    }

    public function setNome(?string $nome) : static
    {
        $this->nome = $nome;

        return $this;
    }
}

class Pedido
{
    private ?int $numPedido;
    private ?Cliente $cliente = null;
    
    public function __construct(?int $numPedido)
    {
        $this->numPedido = $numPedido;
    }

    public function getPedido() : ?int
    {
        return $this->numPedido;
    }

    public function setCliente(?Cliente $cliente)
    {
        $this->cliente = $cliente;

        return $this;
    }

    public function getCliente() : ?Cliente
    {
        return $this->cliente;
    }
}

$cliente = new Cliente("João da Silva");
$pedido = new Pedido(123);

$pedido->setCliente($cliente);

echo "Pedido Número: " . $pedido->getPedido() . PHP_EOL;
echo "Cliente: " . $pedido->getCliente()->getNome() . PHP_EOL;



?>