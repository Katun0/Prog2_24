<?php 
// Utilizando o Exemplo da questão 4, utilizarei a classe Produto como "Pai" ou "SuperClasse"

class produto {

    private $nome;
    private $preco;
    private $estoque;

    public function __construct($nome, $preco,$estoque){
        $this->nome = $nome;
        $this->preco = $preco;
        $this->estoque = $estoque; 
    }

    public function vender($quantidade){

        if ($this->estoque -= $quantidade){
            return 'Sem estoque do produto selecionado !';
        }else{
            return "Temos {$this->estoque} disponível para a venda !";
        }
    }
};


// Classe "Filho" ou "SubClasse", Adicionei mais informações ao produto, especificando que ele é um tipo de produto eletronico
class eletronico extends produto {
    public $marca;
    public $voltagem;
    public $tipo;

    public function __construct($nome, $preco, $estoque, $marca, $voltagem, $tipo)
    {
        parent::__construct($nome,$preco,$estoque);
        $this->marca = $marca;
        $this->voltagem = $voltagem;
        $this->tipo = $tipo;
    }
}

?>