<?php
include_once("../interfaces/crud.php");
class Produto implements crud{
    protected $id;
    protected $categoria_id;
    protected $nome;
    protected $preco;
    protected $quantidade;

    public function __construct($id=false){
        if($id){
        $sql = "SELECT * FROM produtos where id = ?";
        $conexao = DB::conexao();
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        $stmt->execute();
        foreach($stmt as $obj){
            $this->setId($obj['id']);
            $this->setNome($obj['nome']);
            $this->setCategoria($obj['categoria_id']);
            $this->setPreco($obj['preco']);
            $this->setQuantidade($obj['quantidade']);
             }
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
    public function adicionar(){
        $sql = "INSERT INTO produtos (categoria_id, nome, preco, quantidade)
                VALUES (?, ?, ?, ?)";

                try{
                $conexao = DB::conexao();
                $conexao = DB::conexao();
                $stmt = $conexao->prepare($sql); //$stmt =  STATEMANT
                $stmt->bindParam(1, $this->categoria_id);
                $stmt->bindParam(2, $this->nome);
                $stmt->bindParam(3, $this->preco);
                $stmt->bindParam(4, $this->quantidade); //os numeros representam a ordem dos "?"
                $stmt->execute();
            }catch(PDOException $e){
                echo "Erro na Função Adicionar Produto:" .$e->getMessage();

                }
    }
    public static function listar(){  
        $sql = "SELECT * FROM produtos";
        $conexao = DB::conexao();
        $stmt = $conexao->prepare($sql);
        $stmt->execute();
        $registros = $stmt->fetchAll(PDO::FETCH_ASSOC); 
                $objetos = array();   
                foreach($registros as $registro){  
                    $temporario = new Produto();
                    $temporario->setId($registro['id']);
                    $temporario->setNome($registro['nome']);
                    $temporario->setCategoria($registro['categoria_id']);
                    $temporario->setPreco($registro['preco']);
                    $temporario->setQuantidade($registro['quantidade']);
                    $objetos[] = $temporario;
                }
            return $objetos;
        }
        return false;
    
    public function atualizar(){}    
    public function excluir(){}      
}
?>