<?php 
    echo "<h3>Banco de Dados - Data Access Object e PDO (Classe SQL)</h3>";
    //classe extende do PDO que é uma classe nativa e possui todos os metodos para as conexões, etc...
    class Sql extends PDO {

        private $conn;
    
        public function __construct() {
            $this->conn = new PDO("sqlsrv:Database=dbGolServices;server=ESCRITORIO;ConnectionPooling=0","dbUserForWeb","mlt2087");    
        }
    
        private function setParams($statment, $parameters = array()) {    
            foreach ($parameters as $key => $value) {    
                $this->setParam($statment, $key, $value);    
            }    
        }
    
        private function setParam($statment, $key, $value){    
            $statment->bindParam($key, $value);    
        }
    
        public function strquery($rawQuery, $params = array()) {    
            $stmt = $this->conn->prepare($rawQuery);    
            $this->setParams($stmt, $params);    
            $stmt->execute();    
            return $stmt;    
        }
    
        public function select($rawQuery, $params = array()):array
        {    
            $stmt = $this->strquery($rawQuery, $params);    
            return $stmt->fetchAll(PDO::FETCH_ASSOC);    
        }    
    }
 ?>