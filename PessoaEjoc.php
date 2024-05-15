<?php

class PessoaEjoc{
    public $nome;
    public $cod;
    public $equipe = null;

    public function __construct($nome,$cod,$equipe = null){
        $this->nome =$nome;
        $this->cod =$cod;
        $this->equipe =$equipe;

    }

    public function __toString(){
        return "$this->nome - $this->cod";
    }
}