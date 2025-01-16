<?php

class Animal{
    public string $nome;
    public string $especie;
    public string $coloracao;
    
    function __construct($nome, $especie) {
        $this->nome = $nome;
        $this->especie = $especie;
    }

    public function hello(){
        echo "Olá " . $this->nome;
    }

    public function get_especie(){
        return $this->especie;
    }

    public function set_cor($coloracao){
        $this->coloracao = $coloracao;
    }
}

$cat = new Animal("Gorda","gato");

$cat->hello();

$dog = new Animal("Rex", "cachorro");
echo "<br>" . $dog->especie;

$dog->set_cor("Malhado");

echo "<br>" . $dog->coloracao;