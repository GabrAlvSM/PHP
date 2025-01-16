<?php

class Pessoa{
    public string $nome;
    public string $cpf;
    public string $email;

    public function hello(){
        echo "Hello ";
    }
}

$p1 = new Pessoa();
$p1->nome = "Ju";
$p1->cpf = "111.111.111-11";

$p1->hello();
echo "<br>" . $p1->nome;
echo "<br>" . $p1->cpf;

var_dump($p1);