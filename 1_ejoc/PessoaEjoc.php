<?php

class PessoaEjoc{
    public $nome;
    public $cod;
    public $equipe;

    public function __construct($nome,$cod,$equipe = null){
        $this->nome     = htmlspecialchars($nome, ENT_QUOTES, 'UTF-8');
        $this->cod      = htmlspecialchars($cod, ENT_QUOTES, 'UTF-8');
        $this->equipe   = htmlspecialchars($equipe, ENT_QUOTES, 'UTF-8');

    }

    public function __toString(){
        return "$this->nome - $this->cod - $this->equipe";
    }
}