<?php
include_once("../interfaces/crud.php");
class Categoria implements crud{
    protected $id;
    protected $nome;

    public function setId($s){
        $this->id = $s;
    }

    public function getId(){
        return $this->id;
    }


    public function setNome($n){
        $this->nome = $n;
    }
    public function getNome(){
        return $this->nome;

    }
}
?>