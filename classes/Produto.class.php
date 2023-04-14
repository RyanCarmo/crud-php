<?php
class produto{
    protected $id;
    protected $categoria_id;
    protected $nome;
    protected $preco;
    protected $quantidade;


public function setNome($n){
    $this->nome = $n;

    }

public function getNome(){
    return $this->$nome;

    }
}
?>