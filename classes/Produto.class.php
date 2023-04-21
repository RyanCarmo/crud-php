<?php
include_once("../interfaces/crud.php");
class Produto implements crud{
    protected $id;
    protected $categoria_id;
    protected $nome;
    protected $preco;
    protected $quantidade;

    public function construct($id=false){
        if($id){
        echo "testando o Construtor";
        }
    }

    public function setId($s){
        $this->id = $s;
    }

    public function getId(){
        return $this->id;
    }
    
    public function setCategoria_id($d){
        $this->categoria_id = $d;
    }

    public function getCategoria_id(){
        return $this->categoria_id;
    }

    public function setPreco($p){
        $this->preco = $p;
    }

    public function getPreco(){
        return $this->preco;
    }

    public function setQuantidade($q){
        $this->quantidade = $q;
    }

    public function getQuantidade(){
        return $this->quantidade;
    }


    public function setNome($n){
        $this->nome = $n;

    }

    public function getNome(){
        return $this->nome;

    }
}
?>