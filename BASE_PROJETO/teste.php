<?php

require "./App/DB/Database.php";

$banco = new Database("usuario");

$nome = "Thiago";

$dados_user = array(
    "nome"=>$nome,
    "email"=>"alvin@email.com",
    "cpf"=>"11111111111",
    "senha"=>"321",
    "id_perfil"=>1
);

// $resultado = $banco->insert($dados_user);

// if($resultado){
//     echo "Cadastrado com sucesso!";
// }
// else{
//     echo "Erro ao cadastrar!!";
// }

echo "<br>";

//-----------------------------------------------------------------
// CONDICIONAL TERNARIA:
// $valor = (CONDICAO) ? "VERDADE" : "OUTRO TEXTO";

$valor = (10 > 5) ? "Comparação verdadeira!" : "Comparação falsa!";
echo $valor . "<br>";
//-----------------------------------------------------------------

$usuarios = $banco->select('','nome DESC');

// print_r($usuarios);

foreach($usuarios as $user){
    echo $user["nome"]. "<br>";
}