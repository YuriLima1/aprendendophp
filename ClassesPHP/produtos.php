<?php
class Produtos {
    private $codigo_produto;
    private $nome_produto;
    private $codigo_fornecedor;
    private $codigo_categoria;
    private $quantidade_unidade;
    private $preco_unitario;
    private $unidade_estoque;
    private $unidade_pedida;
    private $nivel_estoque;
    private $descontinuado;

    public function __construct($nome_produto, $codigo_fornecedor, $codigo_categoria, $quantidade_unidade, $preco_unitario, $unidade_estoque, $unidade_pedida, $nivel_estoque, $descontinuado) { 
        $this->Nome_Produto = $nome_produto;
        $this->Codigo_Fornecedor = $codigo_fornecedor;
        $this->Codigo_Categoria = $codigo_categoria;
        $this->Quantidade_Unidade = $quantidade_unidade;
        $this->Preco_Unitario = $preco_unitario;
        $this->Unidade_Estoque = $unidade_estoque;
        $this->Unidade_Pedida = $unidade_pedida;
        $this->Nivel_Estoque = $nivel_estoque;
        $this->Descontinuado = $descontinuado;
    }

    public function set_nome_produto($nome_produto) {
        $this->Nome_Produto = $nome_produto;
    }
    public function get_nome_produto() {
        return $this->nome_produto;
    }
    public function set_codigo_fornecedor($codigo_fornecedor) {
        $this->Codigo_Fornecedor = $codigo_fornecedor;
    }
    public function get_codigo_fornecedor() {
        return $this->codigo_fornecedor;
    }
    public function set_codigo_categoria($codigo_categoria) {
        $this->Codigo_Categoria = $codigo_categoria;
    }
    public function get_codigo_categoria() {
        return $this->codigo_categoria;
    }
    public function set_quantidade_unidade($quantidade_unidade) {
        $this->Quantidade_Unidade = $quantidade_unidade;
    }
    public function get_quantidade_unidade() {
        return $this->quantidade_unidade;
    }
    public function set_precounitario($preco_unitario) {
        $this->Preco_Unitario = $preco_unitario;
    }
    public function get_preco_unitario() {
        return $this->preco_unitario;
    }
    public function set_unidade_estoque($unidade_estoque) {
        $this->Unidade_Estoque = $unidade_estoque;
    }
    public function get_unidade_estoque() {
        return $this->unidade_estoque;
    }
    public function set_unidade_pedida($unidade_pedida) {
        $this->Unidade_Pedida = $unidade_pedida;
    }
    public function get_unidade_pedida() {
        return $this->unidade_pedida;
    }
    public function set_nivel_estoque($nivel_estoque) {
        $this->Nivel_Estoque = $nivel_estoque;
    }
    public function get_nivel_estoque() {
        return $this->nivel_estoque;
    }
    public function set_descontinuado($descontinuado) {
        $this->Descontinuado = $descontinuado;
    }
    public function get_descontinuado() {
        return $this->descontinuado;
    }
}
?>