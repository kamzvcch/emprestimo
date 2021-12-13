<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);

class Conexao {
    private $usuario = "ae40";
    private $senha   = "ae2021.";
    private $url    = "mysql:host=localhost;dbname=db40;charset=utf8";
 
    function getConexao() {
        return new PDO($this->url, $this->usuario, $this->senha);
    }

}