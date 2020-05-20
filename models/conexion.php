<?php
    class conexion{
        private $_con;
        public function __construct(){
            $this->_con = new mysqli('localhost','root','','facebookPeroRojo');
        }
        public function getUsers(){
            $query = $this->_con->query('SELECT username, nombre FROM usuarios;');
            $retorno = [];
            $i = 0;
            while($fila = $query->fetch_assoc()){
                $retorno[$i] = $fila;
                $i++;
            }
            return $retorno;
        }
    }
?>