<?php 

class funcionario{
    public $nome;
    public $salario;

    public function __construct($nome,$salario)
    {
        $this->nome = $nome;
        $this->salario = $salario;
    }
}


// Classe gerente está expandindo a classe funcionário, com um método em que ele pode aumentar o salário

class gerente extends funcionario{

    public function __construct($nome, $salario) {
        parent::__construct($nome,$salario);
    }

    function aumentarSalario($valor){
        $valor += $this-> salario;
    }
}
?>