<?php 
class animal{
    public function fazerSom(){
        return "Som de qualquer animal";
    }
}

class cachorro implements animal{
    public function fazerSom()
    {
        return "Latido";
    }
}

class gato implements animal{
    public function fazerSom()
    {
        return "Miado";
    }
}
?>