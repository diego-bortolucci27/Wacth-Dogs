<?php

class usuario {

    private $nome;
    private $senha;
    private $id;

    function getId() { //Mostrar o Valor
        return $this->id;
    }

    function setId($id) { //Set Armazena
        $this->id = $id;
    }

    function getNome() {
        return $this->nome;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function getSenha() {
        return $this->senha;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }
}
?>
