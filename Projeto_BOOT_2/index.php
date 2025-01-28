<?php
require "./App/Classes/Usuario.php";

$objUser = new Usuario();
// print_r($objUser);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap</title>
    <link rel="stylesheet" href="./App/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>

<body id="page-top">
    <header class="bg-primary bg-gradient text-black">
        <div class="container px-4 text-center">
            <h1 class="fw-bolder">CRUD com Bootstrap</h1>
        </div>
    </header>
    <div class="container">
        <form method="POST">
            <div class="mb-3">
                <label for="Nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome">
                <!-- <div id="nome" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>

            <div class="mb-3">
                <label for="Email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
                <div id="emailHelp" class="form-text">exemplo@email.com</div>
            </div>

            <div class="mb-3">
                <label for="CPF" class="form-label">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf">
                <div id="emailHelp" class="form-text">Sem pontos ou traços.</div>
            </div>

            <div class="mb-3">
                <label for="Senha" class="form-label">Senha</label>
                <input type="password" name="senha" class="form-control" id="senha">
            </div>

            <div class="dropdown">
                <select id="mySelect">
                <option class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" name="id_perfil">
                    Perfil de Usuario
                </option>

                <ul class="dropdown-menu">
                    <option value="1" class="dropdown-item" name="id_perfil" id="1" onclick="1">ADM</option>
                </ul>
            </div>

            <br>

            <button type="submit" name="cadastrar" class="btn btn-primary">Cadastrar</button>
            <button type="reset" class="btn btn-danger">Cancelar</button>

            <?php
            echo "<br><br>";
            if (isset($_POST["cadastrar"])) {
                $nome = $_POST["nome"];
                $email = $_POST["email"];
                $cpf = $_POST["cpf"];
                $senha = $_POST["senha"];

                echo $nome . "<br>";
                echo $email . "<br>";
                echo $cpf . "<br>";
                echo $senha . "<br>";
                echo $id_perfil . "<br>";

                // $objUser = new Usuario();
                // $objUser->id_usuario = 10;
                // $objUser->nome = $nome;
                // $objUser->email = $email;
                // $objUser->cpf = $cpf;
                // $objUser->senha = $senha;
                // $objUser->id_perfil = $id_perfil;

                // $res = $objUser->cadastrar();
                // if ($res) {
                //     echo "<script> alert('Cadastrado com sucesso!') </script>";
                // }
            } else {
                echo "Erro!";
            }
            ?>
        </form>
    </div>
</body>

</html>