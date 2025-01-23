<?php

class Usuario{
    public string $nome;
    public string $email;
    public string $cpf;
    public string $senha;
    public string $id_perfil;

    public function cadastrar(){
        $db = new Database("usuario");

        $db->insert(
            [
                "nome"=> $this->nome,
                "email"=> $this->email,
                "cpf"=> $this->cpf,
                "senha"=> $this->senha,
                "id_perfil"=> $this->id_perfil

            ]
            );
        return true;
    }

    public function buscar(){
        return (new Database("usuario"))->select()->fetchAll(PDO::FETCH_CLASS,self::class);
    }
}

$user = new Usuario();

$user->nome = "Juliana";
$user->email = "juju@email.com";
$user->cpf = "22222222222";
$user->senha = "123";
$user->id_perfil = 1;

print_r($user);

$usuarios = $user->buscar();

echo "<pre>";
print_r($usuarios);
echo "</pre>";

foreach($usuarios as $usuario){
    echo "<br>";
    echo $usuario->nome .' '. $usuario->email .' '. $usuario->cpf;
}