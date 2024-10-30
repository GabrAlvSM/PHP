<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    echo"<h2>Obrigado, $nome</h2>";
    echo "<p>Recebemos sua mensagem e entraremos em contato em breve.</p> ";
    echo "<h3>Detalhes: </h3>";
    echo "<p>Email: $email</p>";
    echo "<p>Mensagem: $mensagem</p>";
}
else{
    echo"ERRO ao enviar!";
}