<?php
class Fornecedores {
    private $codigo_fornecedor;    
    private $nome_empresa;
    private $nome_contato;
    private $cargo_contato;
    private $endereco;
    private $cidade;
    private $uf;
    private $cep;
    private $pais;
    private $telefone;

    public function __construct($nome_empresa, $nome_contato, $cargo_contato, $endereco, $cidade, $uf, $cep, $pais, $telefone) {
        $this->Nome_Empresa = $nome_empresa;
        $this->Nome_Contato = $nome_contato;
        $this->Cargo_Contato = $cargo_contato;
        $this->Endereco = $endereco;
        $this->Cidade = $cidade;
        $this->UF = $uf;
        $this->CEP = $cep;
        $this->Pais = $pais;
        $this->Telefone = $telefone;
    }

    public function set_nome_empresa($nome_empresa) {
        $this->Nome_Empresa = $nome_empresa;
    }
    public function get_nome_empresa() {
        return $this->nome_empresa;
    }
    public function set_nome_contato($nome_contato) {
        $this->Nome_Contato = $nome_contato;
    }
    public function get_nome_contato() {
        return $this->nome_contato;
    }
    public function set_cargo_contato($cargo_contato) {
        $this->Cargo_Contato = $cargo_contato;
    }
    public function get_cargo_contato() {
        return $this->cargo_contato;
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
    public function set_uf($uf) {
        $this->UF = $uf;
    }
    public function get_uf() {
        return $this->uf;
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