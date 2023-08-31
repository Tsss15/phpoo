<?php
require "conexao.php";
require "moledos/Produto.php";
require "repositorios/ProdutoRepositorio.php";

if($_SERVER["REQUEST_METHOD"]){
   $nome = $_POST["nome"];
   $tipo = $_POST["tipo"];
   $descricao = $_POST["descricao"];
   $preco = $_POST["preco"];
   $imagens = $_POST["imagens"];

   $produto = new Produto (0,
   $nome,
   $tipo,
   $descricao,
   $preco,
   $imagem,
);

$produtoRepositorio = new ProdutoRepositorio ($conn);
$produtoRepositorio-> cadastrar($produto);
header("Location: cadastrar-produtos-sucesso.php")
}
?>