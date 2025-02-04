<?php

require "./App/DB/Database.php";

class Usuario{
    public int $id_usuario;
    public string $nome;
    public string $email;
    public string $cpf;
    public string $senha;
    public string $id_perfil;

    public function cadastrar(){
        $db = new Database("usuario");

        $db->insert(
            [
                "id_usuario"=>$this->id_usuario,
                "nome"=> $this->nome,
                "email"=> $this->email,
                "cpf"=> $this->cpf,
                "senha"=> $this->senha,
                "id_perfil"=> $this->id_perfil

            ]
        );
        return true;
    }

    public function buscar($where=null,$order=null,$limit=null){
        return (new Database("usuario"))->select($where,$order,$limit)->fetchAll(PDO::FETCH_CLASS,self::class);
    }

    public function buscar_id_usu($id_usuario){
        return (new Database("usuario"))->select("id_usuario =".$id_usuario)->fetchObject(self::class);
    }

    public function delete(){
        return(new Database("usuario"))->delete("id_usuario =".$this->id_usuario);
    }

    public function update(){
        return (new Database("usuario"))->update("id_usuario =".$this->id_usuario, 
            [
                "nome"=> $this->id_usuario,
                "email"=> $this->id_usuario,
                "cpf"=> $this->id_usuario,
                "senha"=> $this->id_usuario,
                "id_perfil"=> $this->id_usuario
            ]
        );
    }
}

// $user = new Usuario();

// -------------------------------------------
// // CADASTRO

// $user->nome = "Juliana";
// $user->email = "juju@email.com";
// $user->cpf = "22222222222";
// $user->senha = "123";
// $user->id_perfil = 1;

// print_r($user);

// -------------------------------------------
// // LISTAR

// $usuarios = $user->buscar();

// echo "<pre>";
// print_r($user);
// echo "</pre>";

// foreach($usuarios as $usuario){
//     echo "<br>";
//     echo $usuario->nome .' '. $usuario->email .' '. $usuario->cpf;
// }

// -------------------------------------------
// // INSERT
// $retorno = $user->cadastrar();

// if($retorno){
//     echo "Usuário castrado com sucesso!";
// }
// else{
//     "ERRO! Falha no cadastro do usuário";
// }

// -------------------------------------------
// // DELETE
// $del = $user->delete("10");

// if($del){
//     echo "Usuário deletado com sucesso!";
// }
// else{
//     "ERRO! Falha na deleção do usuário";
// }

// -------------------------------------------
// // READ

// $busca = $user->buscar_id_usu(10);
// print_r($busca);
// $busca->nome = "Alvin";
// $busca->cpf = "33333333333";
// $busca->email = "alvin@email.com";
// $busca->senha = "padrao123";

// print_r($busca);

// -------------------------------------------
// // UPDATE

// $resposta_do_banco = $user->update();

// echo "<br>";
// print_r($resposta_do_banco);
// echo "<br>";
