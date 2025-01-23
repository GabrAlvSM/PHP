<?php

class Carro{

    public string $modelo;
    public string $marca;
    public string $cor;
    public string $tipo;
    public string $ano;
    public string $combustivel;
    public string $qnt_portas;

    public function __construct($modelo, $marca, $tipo, $combustivel) {
        $this->modelo = $modelo;
        $this->marca = $marca;
        $this->tipo = $tipo;
        $this->combustivel = $combustivel;
    }

    public function set_cor($cor){
        $this->cor = $cor;
    }

    public function set_ano($ano){
        $this->ano = $ano;
    }

    public function set_qntportas($qnt_portas){
        $this->qnt_portas = $qnt_portas;
    }

    public function get_modelo(): string{
        return "Modelo:" . $this->modelo . "<br>";
    }

    public function get_cor(){
        return "Cor: " . $this->cor . "<br>";
    }

    public function get_ano(): string{
        return "Ano:" . $this->ano . "<br>";
    }

    public function get_qntportas(){
        return "Quantidade de portas:" . $this->qnt_portas . "<br>";
    }

    public function get_all_info(){
        return "Modelo: ". $this->modelo ."<br>Marca: ". $this->marca ."<br>Cor: ". $this->cor. "<br>Tipo: ". $this->tipo ."<br>Ano: ". $this->ano ."<br>Combustivel: ". $this->combustivel . "<br>Portas: ". $this->qnt_portas;
    }
}

$carro1 = new Carro("Strada", "Fiat", "Utilitario", "Flex");

$carro1->set_cor("Vermelho");
$carro1->set_ano("2025");
$carro1->set_qntportas("2");

echo $carro1->get_cor();

echo $carro1->get_all_info();

