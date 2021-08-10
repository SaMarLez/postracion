<?php

    class homeModel extends Mysql{
        public function __construct(){
            parent::__construct();
        }

        public function setUser(string $user, int $edad){
            $query_ins = "INSERT INTO usuario(nombre,edad) VALUES(?,?)";
            $arrData = array($user,$edad);
            $request_ins = $this->insert($query_ins,$arrData);
            return $request_ins;
        }

        public function getUser($id){
            $sql = "SELECT * FROM usuario WHERE id = $id";
            $request = $this->select($sql);
            return $request;
        }

        public function getAllUsers(){
            $sql = "SELECT * FROM usuario";
            $request = $this->select_all($sql);
            return $request;
        }

        public function updateUser(int $id, string $user, int $edad){
            $sql = "UPDATE usuario SET nombre = ?, edad = ? WHERE id = $id";
            $arrData = array($user,$edad);
            $request = $this->update($sql,$arrData);
            return $request;
        }

        public function deleteUser($id){
            $sql = "DELETE FROM usuario WHERE id =$id";
            $request = $this->delete($sql);
            return $request;
        }

    }

?>