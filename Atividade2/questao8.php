<?php 

trait TraitA
{
    public function pedirNota(){
        echo 'Me da 10 ';
    }
}


trait TraitB
{
    public function professorNome(){
        echo 'Borsa ';
    }
}

class Classe
{
    use TraitA, TraitB;

    public function suplicar(){
        echo 'Por Favor !! ';
    }
}

$frase = new Classe();

$frase->pedirNota();
$frase->professorNome();
$frase->suplicar();
?>