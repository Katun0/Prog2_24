<?php

class BancoDeDados
{
    private string $host;
    private string $dbname;
    private string $usuario;
    private string $senha;
    private PDO $conexao;

    public function __construct(string $host, string $dbname, string $usuario, string $senha)
    {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->usuario = $usuario;
        $this->senha = $senha;

        $this->conectar();
    }

    private function conectar(): void
    {
        try {
            $dsn = "mysql:host={$this->host};dbname={$this->dbname};charset=utf8mb4";
            $this->conexao = new PDO($dsn, $this->usuario, $this->senha);
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erro ao conectar ao banco de dados: " . $e->getMessage());
        }
    }

    public function buscaClientes(): array
    {
        try {
            $sql = "SELECT * FROM cliente";
            $stmt = $this->conexao->query($sql);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erro ao buscar clientes: " . $e->getMessage();
            return [];
        }
    }
}

$host = 'localhost';
$dbname = 'petsdb';
$usuario = 'root';
$senha = '';

$banco = new BancoDeDados($host, $dbname, $usuario, $senha);
$clientes = $banco->buscaClientes();

echo "Clientes encontrados:" . PHP_EOL;
foreach ($clientes as $cliente) {
    echo "--------------------------------------------------------------------------------------------------------------------------- \r";
    echo "ID: {$cliente['id']} | Nome: {$cliente['nome']} | Email: {$cliente['email']} | CPF/CNPJ: {$cliente['cpf_cnpj']}" . PHP_EOL;
}
