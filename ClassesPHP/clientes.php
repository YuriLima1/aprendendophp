<?php
class Clientes {
    private $codigo_cliente;
    private $nome;
    private $endereco;
    private $cidade;
    private $cep;
    private $uf;
    private $pais;
    private $telefone;
    private $fax;
  
    public function __construct($nome, $endereco, $cidade, $cep, $uf, $pais, $telefone) {
        $this->Nome = $nome;
        $this->Endereco = $endereco;
        $this->Cidade = $cidade;
        $this->CEP = $cep;
        $this->UF = $uf;
        $this->Pais = $pais;
        $this->Telefone = $telefone;
    }
    // SET: Mipula o atributo e insere o valor dentro dele.
    // GET: Retorna algo.
    public function set_nome($nome) {
        $this->Nome = $nome;
    }
    public function get_nome() {
        return $this->nome;
    }
    public function set_endereco($endereco) {
        $this->Endereco = $endereco;
    }
    public function get_endereco() {
        return $this->endereco;
    }
    public function set_cidade($cidade) {
        $this->Cidade = $cidade;
    }
    public function get_cidade() {
        return $this->cidade;
    }
    public function set_cep($cep) {
        $this->CEP = $cep;
    }
    public function get_cep() {
        return $this->cep;
    }
    public function set_pais($pais) {
        $this->Pais = $pais;
    }
    public function get_pais() {
        return $this->pais;
    }
    public function set_telefone($telefone) {
        $this->Telefone = $telefone;
    }
    public function get_telefone() {
        return $this->telefone;
    }
}
?>