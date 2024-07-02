<?php
class Itens_Pedidos {
    private $numero_pedido;
    private $codigo_produto;
    private $preco_unitario;
    private $quantidade;
    private $desconto;

    public function __construct($numero_pedido, $codigo_produto, $preco_unitario, $quantidade, $desconto) {
        $this->Numero_Pedido = $numero_pedido;
        $this->Codigo_Produto = $codigo_produto;
        $this->Preco_Unitario = $preco_unitario;
        $this->Quantidade = $quantidade;
        $this->Desconto = $desconto;
    }
    
    public function set_numero_pedido($numero_pedido) {
        $this->Numero_Pedido = $numero_pedido;
    }
    public function get_numero_pedido() {
        return $this->numero_pedido;
    }
    public function set_codigo_produto($codigo_produto) {
        $this->Codigo_Produto = $codigo_produto;
    }
    public function get_codigo_produto() {
        return $this->codigo_produto;
    }
    public function set_preco_unitario($preco_unitario) {
        $this->Preco_Unitario = $preco_unitario;
    }
    public function get_preco_unitario() {
        return $this->preco_unitario;
    }
    public function set_quantidade($quantidade) {
        $this->Quantidade = $quantidade;
    }
    public function get_quantidade() {
        return $this->quantidade;
    }
    public function set_desconto($desconto) {
        $this->Desconto = $desconto;
    }
    public function get_desconto() {
        return $this->desconto;
    }
}
?>