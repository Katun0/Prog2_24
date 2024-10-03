<?php 

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


?>
