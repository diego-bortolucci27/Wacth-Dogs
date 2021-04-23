<?php

    class conexao
    {
        public $usuario = "root";
        public $senha = "";
        public $caminho = "localhost";
        public $banco = "sistema";
        public $conexao;

    public function __construct()
        {
            try
            {
                $this->conexao = new PDO("mysql:dbname={$this->banco};host={$this->caminho}", "root", "");
            }
            catch (PDOException $e)
            {
                echo "FALHA" . $e->getMessage();
            }
        }
        public function conexao()
        {
            return $this->conexao;
        }
    }
?>