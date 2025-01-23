<?php

require "./App/DB/Database.php";

$banco = new Database("usuario");

// $nome = "Thiago";

// $dados_user = array(
//     "nome"=>$nome,
//     "email"=>"alvin@email.com",
//     "cpf"=>"11111111111",
//     "senha"=>"321",
//     "id_perfil"=>1
// );

$id = 4;

$usuarios = $banco->select();
print_r($usuarios);

for($i=0;$i<count($usuarios);$i++){
    echo "<br>";
    echo $usuarios[$i]["id_usuario"] . " " . $usuarios[$i]["nome"];
}

// $del_user = $banco->delete("id_usuario = 3");

// if($del_user){
//     echo "<script>alert('Deletado com sucesso!')</script>";
// }
// else{
//     echo "<script>alert('Erro ao deletar!')</script>";
// }

$id_num = 3;

$atualizar_usuario = $banco->select_by_id("id_usuario = $id_num");

echo "<br>";
print_r($atualizar_usuario);

$atualizar_usuario["nome"] = "Novo nome";
$atualizar_usuario["email"] = "novo.email@email.com";
$atualizar_usuario["cpf"] = "11111111111";

echo "<br>";
echo "<pre>";
print_r($atualizar_usuario);
echo "</pre>";

$resultado = $banco->update("id_usuario = " .$atualizar_usuario["id_usuario"], $atualizar_usuario);

print_r($resultado);