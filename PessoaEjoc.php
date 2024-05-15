<?php

class PessoaEjoc{
    public $nome;
    public $cod;

    public function __construct($nome,$cod){
        $this->nome = htmlspecialchars($nome, ENT_QUOTES, 'UTF-8');
        $this->cod = htmlspecialchars($cod, ENT_QUOTES, 'UTF-8');

    }

    public function __toString(){
        return "$this->nome - $this->cod";
    }
}