<?php

require "./App/Entity/Pessoa.php";
require "./App/Entity/Carro.php";

echo "<h1> Cadastro de Carros </h1>";

$carro = new Carro("Gol", "Volkswagen", "Passeio", "flex");
$model = $carro->get_modelo();

echo $model;

$pes = new Pessoa();
$pes->nome = "Alvin";
$pes->estado_civil = "Namorando";
$pes->idade = 23;
echo "<br>";
// print_r($pes);

var_dump($pes);
echo "<br>";
echo $pes->nome;