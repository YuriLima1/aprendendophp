<?php
class Pedidos {
    private $numero_pedido;
    private $codigo_cliente;
    private $codigo_funcionario;
    private $data_pedido;
    private $data_entrega;
    private $data_envio;
    private $frete;
    private $nome_destinatario;
    private $endereco_destinatario;
    private $cidade_destino;
    private $cep_destino;
    private $pais_destino;

    public function __construct($codigo_cliente, $codigo_funcionario, $data_pedido, $data_entrega, $data_envio, $frete, $nome_destinatario, $endereco_destinatario, $cidade_destino, $cep_destino, $pais_destino) {
        $this->Codigo_Cliente = $codigo_cliente;
        $this->Codigo_Funcionario = $codigo_funcionario;
        $this->Data_Pedido = $data_pedido;
        $this->Data_Entrega = $data_entrega;
        $this->Data_Envio = $data_envio;
        $this->Frete = $frete;
        $this->Nome_Destinatario = $nome_destinatario;
        $this->Endereco_Destinatario = $endereco_destinatario;
        $this->Cidade_Destino = $cidade_destino;
        $this->CEP_Destino = $cep_destino;
        $this->Pais_Destino = $pais_destino;
    }

    public function set_codigo_cliente($codigo_cliente) {
        $this->Codigo_Cliente = $codigo_cliente;
    }
    public function get_codigo_cliente() {
        return $this->codigo_cliente;
    }
    public function set_codigo_funcionario($codigo_funcionario) {
        $this->Codigo_Funcionario = $codigo_funcionario;
    }
    public function get_codigo_funcionario() {
        return $this->codigo_funcionario;
    }
    public function set_data_pedido($data_pedido) {
        $this->Data_Pedido = $data_pedido;
    }
    public function get_data_pedido() {
        return $this->data_pedido;
    }
    public function set_data_entrega($data_entrega) {
        $this->data_entrega = $data_entrega;
    }
    public function get_data_entrega() {
        return $this->data_entrega;
    }
    public function set_data_envio($data_envio) {
        $this->Data_Envio = $data_envio;
    }
    public function get_data_envio() {
        return $this->data_envio;
    }
    public function set_frete($frete) {
        $this->Frete = $frete;
    }
    public function get_frete() {
        return $this->frete;
    }
    public function set_nome_destinatario($nome_destinatario) {
        $this->Nome_Destinatario = $nome_destinatario;
    }
    public function get_nome_destinatario() {
        return $this->nome_destinatario;
    }

    public function set_endereco_destinatario($endereco_destinatario) {
        $this->Endereco_Destinatario = $endereco_destinatario;
    }
    public function get_endereco_destinatario() {
        return $this->endereco_destinatario;
    }
    public function set_cidade_destino($cidade_destino) {
        $this->Cidade_Destino = $cidade_destino;
    }
    public function get_cidade_destino() {
        return $this->cidade_destino;
    }
    public function set_cep_destino($cep_destino) {
        $this->CEP_Destino = $cep_destino;
    }
    public function get_cep_destino() {
        return $this->cep_destino;
    }
    public function set_pais_destino($pais_destino) {
        $this->Pais_Destino = $pais_destino;
    }
    public function get_pais_destino() {
        return $this->pais_destino;
    }
}
?>