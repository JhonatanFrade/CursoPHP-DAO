<?php

class sql extends PDO {

    private $conn;

    public function __construct(){
        $this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
    }


    private function setParams($statement, $parameters = array()){
        foreach ($parameters as $key => $value) {     
            $this->setParam($statement, $key, $value);
        }
    }

    private function setParam($statement, $key, $value){
        $statement->bindParam($key, $value);
    }

    public function query($RawQuery, $params = array()){
        $stmt = $this->conn->prepare($RawQuery);
        $this->setParams($stmt, $params);
        $stmt->execute();
        return $stmt;
    }

    // AGORA UM METODO PRO SELECT
    public function select($RawQuery, $params = array()):array{
        $stmt = $this->query($RawQuery, $params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>