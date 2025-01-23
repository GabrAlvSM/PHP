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

    public function select_by_id($where = null, $order = null, $limit = null, $fields = "*"){
        $where = strlen($where) ? "WHERE ".$where : "";
        $order = strlen($order) ? "ORDER BY ".$order : "";
        $limit = strlen($limit) ? "LIMIT ".$limit : "";

        $query = "SELECT $fields FROM $this->table $where $order $limit";

        return $this->execute($query)->fetch(PDO::FETCH_ASSOC);
    }

    public function update($where, $array){
        //Extraindo as chaves, colunas
        $fields = array_keys($array);
        $values = array_values($array);
        //Montar a query
        $query = "UPDATE $this->table SET ".implode('=?,',$fields)."=: WHERE $where";

        $res = $this->execute($query, $values);
        return $res;
    }

    public function delete($where){
        // MONTAR A QUERY
        $query = "DELETE FROM $this->table WHERE $where";

        // DEBUG
        // echo "<br>$where deletado!"; 
        // echo $query;
        // print_r($del);

        $del = $this->execute($query);
        $del = $del->rowCount();

        if($del==1){
            return true;
        }
        else{
            return false;
        }
    }
}