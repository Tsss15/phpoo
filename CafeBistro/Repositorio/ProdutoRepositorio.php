<?php
class ProdutoRepositorio
{
    private $conn;
    public function __construct($conn)
    {
       $this->conn = $conn;  
    }
    public function cadastrar(Produto $produto)
    {
        $sql = "INSERT INTO produtos (tipo, nome, descricao, imagem, preco) VALUES (?,?,?,?,?)";
        $snmt = $this->conn->prepare;($sql);
        $snmt->bind_param "ssssd", $produto-> getTipo(), $produto->getNome(), $produto->getDescrisao(), $produto->getImagem(),  $produto->getPreço(),
        $snmt-> execute();
        $snmt->close();
    }
}





















}