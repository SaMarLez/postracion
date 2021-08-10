<?php

    class Mysql extends Conexion{
        private $conexion;
        private $strquery;
        private $arrVals;

        function __construct(){
            $this->conexion = new Conexion();
            $this->conexion = $this->conexion->conect();
        }

        // Insertar un registro
        public function insert(string $query, array $arrVals){
            $this->strquery = $query;
            $this->arrVals = $arrVals;
            $insert = $this->conexion->prepare($this->strquery);
            $resInsert = $insert->execute($this->arrVals);
            if ($resInsert) {
                $lastInsert = $this->conexion->lastInsertId();
            }else{
                $lastInsert = 0;
            }
            return $lastInsert;
        }

        // Busca un registro
        public function select(string $query){
            $this->strquery = $query;
            $result = $this->conexion->prepare($this->strquery);
            $result->execute();
            $data = $result->fetch(PDO::FETCH_ASSOC);
            return $data;
        }

        // Devuelve todos los registros
        public function select_all(string $query){
            $this->strquery = $query;
            $result = $this->conexion->prepare($this->strquery);
            $result->execute();
            $data = $result ->fetchall(PDO::FETCH_ASSOC);
            return $data;
        }

        // Actualizar registros
        public function update(string $query, array $arrVals){
            $this->strquery = $query;
            $this->arrVals = $arrVals;
            $update = $this->conexion->prepare($this->strquery);
            $resExecute = $update->execute($this->arrVals);
            return $resExecute;
        }

        // Eliminar un registro
        public function delete(string $query){
            $this->strquery = $query;
            $result = $this->conexion->prepare($this->strquery);
            $rest = $result->execute();
            return $rest;
        }
    }

?>