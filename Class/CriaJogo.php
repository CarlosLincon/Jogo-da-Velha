<?php

require_once __DIR__ . '/Conexao.php';

class CriaJogo
{
    private $link;
    private $conexao;
    public function __construct()
    {
        $this->conexao = new Conexao();
        $this->link = $this->conexao->conexao;
    }

    function criarSala($nomeJogador)
    {
        date_default_timezone_set('America/Sao_Paulo');
        $dataAtual = date('Y-m-d H:i');
        $consulta = $this->link->prepare("INSERT INTO `partidas`( `Jogador_1`, `data_inicio`) VALUES (?,?)");
        $consulta->bind_param("ss", $nomeJogador, $dataAtual);
        $consulta->execute();
       
    }
}
