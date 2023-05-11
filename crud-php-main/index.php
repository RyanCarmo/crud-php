<?php
include_once("classes/produto.class.php");
include_once("classes/categoria.class.php");
$produto= new Produto(2);

$produtos = produto::listar();
if($produtos){
    foreach(produtos as $produto){
        echo $produto->getId(). "</br>";
            echo $produto->getNome(). "</br>";
            echo $produto->getCategoria(). "</br>";
            echo $produto->getPreco(). "</br>";
            echo $produto->getQuantidade(). "</br>";
            echo " ------ ";
            echo "</br>";

    }
}




?>