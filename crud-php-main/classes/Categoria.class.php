<?php
include_once("../interfaces/crud.php");
include_once("classes/DB.class.php");

class Categoria implements crud{
    protected $id;
    protected $nome;

    public function __contruct($id=false){
        if($id){
            $sql = "SELECT * FROM categorias where id = ?";
            $conexao = DB::conexao();
            $stmt = $conexao->prepare($sql);
            $stmt-> bindparam(1, $id, pdo::PARAM INT);
            $stmt-> execute();
            foreach($stmt as $obj){
                $this->setId($obj['id']);
                $this->setNome($obj['nome']);
            }
        }
    }

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
    public function adicionar(){}
    public static function listar(){}
    public function atualizar(){}
    public function excluir(){}
}
?>