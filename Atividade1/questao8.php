<?php 
interface OperacaoBancaria{
    public function executar();
}

class depositar implements OperacaoBancaria{

    public  $quantidade;

    public function __construct($quantidade) {
        $this->quantidade = $quantidade;
    }

    function executar(){
        return "Valor {$this->quantidade} depositado com sucesso !!";
    }
}

class sacar implements OperacaoBancaria{

    public $quantidade;

    public function __construct($quantidade) {
        $this->quantidade = $quantidade;
    }

    function executar(){
        return "Valor {$this->quantidade} sacado com sucesso !!";
    }
}
?>