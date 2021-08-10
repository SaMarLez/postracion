<?php 

    class Conexion{
        private $host = "localhost";
        private $user = "root";
        private $password = "";
        private $db = "postracion";
        private $connect;

        public function __construct(){
            $connectionString = "mysql:host=".$this->host.";dbname=".$this->db.";charset=utf8";
            try {
                $this->conect = new PDO($connectionString, $this->user, $this->password);
                $this->conect->setAttribute(PDO::ATT_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $ex) {
                $this->conect = 'Error de conexión';
                echo "ERROR: ".$e->getMessage();
            }
        }

        public function conect(){
            return $this->conect;
        }

    }

?>