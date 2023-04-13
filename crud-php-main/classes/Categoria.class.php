<php
class Categoria{
    protected $id;
    protected $nome;


    public function setNome($n){
        $this->nome = $n;
    }
    public function getNome(){
        return $this->nome;

    }
}
?>