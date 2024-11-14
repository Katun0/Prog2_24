<?php 

class Funcionario 
{
    private ?string $nome;
    private ?float $salario;

    public function __construct(?string $nome, ?float $salario)
    {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function getNome() : ?string
    {
        return $this->nome;
    }

    public function getSalario() : ?float
    {
        return $this->salario;
    }
}


class Departamento
{
    private ?string $nome;
    private array $funcionarios = []; // Agregação da classe Funcionarios | Lista de funcionarios

    public function __construct(?string $nome)
    {
        $this->nome = $nome;
    }

    public function getNome() : ?string
    {
        return $this->nome;
    }

    public function setFuncionarios(Funcionario $funcionario)
    {
        $this->funcionarios[] = $funcionario;
    }

    public function getFuncionarios()
    {
        return $this->funcionarios;
    }
}

class Empresa
{
    private ?string $nome;
    private Departamento $departamento; // Composição -> Empresa contém Departamento 

    public function __construct(?string $nome, Departamento $departamento) 
    {
        $this->nome = $nome;
        $this->departamento = $departamento;
    }

    public function getNome() : ?string
    {
        return $this->nome;
    }


    public function getDepartamento() : Departamento
    {
        return $this->departamento;
    }
}
$func1 = new Funcionario("Adalgamir", 2600.10);
$func2 = new Funcionario("Ivancarlos Reginaldo", 3000.00);

$departamento = new Departamento("Desenvolvimento");
$departamento->setFuncionarios($func1);
$departamento->setFuncionarios($func2);

$empresa = new Empresa("Tech Solutions", $departamento);

echo "Empresa: " . $empresa->getNome() . PHP_EOL;
echo "Departamento: " . $empresa->getDepartamento()->getNome() . PHP_EOL;

echo "Funcionários do Departamento:" . PHP_EOL;
foreach ($empresa->getDepartamento()->getFuncionarios() as $funcionario) {
    echo "- " . $funcionario->getNome() . PHP_EOL . " -> R$" . $funcionario->getSalario() . PHP_EOL;
}

?>