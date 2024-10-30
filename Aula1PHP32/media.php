<?php

$nota1 = 7.5;
$nota2 = 5.5;
$nota3 = 9;
$nota4 = 8;

$media = ($nota1 + $nota2 + $nota3 + $nota4)/4;

if ($media >= 7) {   
    echo "Media $media aluno aprovado!";
}
elseif ($media >= 5 and $media <= 7) {
    echo "Media $media aluno de exame!";
}
else {
    echo "Media $media aluno reprovado!";
}

?>