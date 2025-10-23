<?php

class Conexao
{
    private $host = "localhost";
    private $dbname = "jogo_da_velha";
    private $user = "root";
    private $pass = "";
    public $conexao;

    public function __construct()
    {
        $this->conexao = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
          if ($this->conexao->connect_error) {
            die("Erro na conexão" . $this->conexao->connect_error);
        }
    }
}
