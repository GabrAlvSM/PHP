<?php

class Database{
    private $conn;
    private string $local = "10.28.0.235";
    private string $banco = "passcontrol_ex";
    private string $user = "devweb";
    private string $password = "suporte@22";
    private $table;

    function __construct($table = null) {
        $this->table = $table;
        $this->connect();
    }

    private function connect(){
        try{
            $this->conn = new PDO("mysql:host=$this->local;dbname=$this->banco", $this->user, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            echo "Conectado com sucesso!";
        }
        catch(PDOException $err){
            die("(connect)Conecção falhou, erro: ". $err->getMessage());
        }
    }

    public function execute($query, $binds = []){
        // echo $query;

        try{
            $stmt = $this->conn->prepare($query);
            $stmt->execute($binds);
            return $stmt;
        }
        catch(PDOException $err){
            die("(execute)Conecção falhou, erro: ". $err->getMessage());
        }
    }

    public function insert($values){
        $fields = array_keys($values);
        $binds = array_pad([],count($fields),"?");
        $query = "INSERT INTO " . $this->table . "(".implode(",",$fields).") VALUES (".implode(",",$binds).")";

        $res = $this->execute($query,array_values($values));

        if($res){
            return true;
        }
        else{
            return false;
        }
    }

    public function select($where = null, $order = null, $limit = null, $fields = "*"){
        $where = strlen($where) ? "WHERE ".$where : "";
        $order = strlen($order) ? "ORDER BY ".$order : "";
        $limit = strlen($limit) ? "LIMIT ".$limit : "";

        $query = "SELECT $fields FROM $this->table $where $order $limit";

        // echo $query;

        return $this->execute($query);
    }
}