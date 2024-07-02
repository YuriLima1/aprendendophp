<?php
class Categorias {
    private $cod_categoria;
    private $nome_categoria;
    private $descricao;
    private $figura;

    public function __construct($nome_categoria, $descricao, $figura) {
        $this->nome_categoria = $nome_categoria;
        $this->descricao = $descricao;
        $this->figura = $figura;
    }
    // SET: Mipula o atributo e insere o valor dentro dele.
    // GET: Retorna algo.
    public function set_nome_categoria($nome_categoria) {
        $this->nome_categoria = $nome_categoria;
    }
   public function get_nome_categoria() {
        return $this->nome_categoria;
   }
   public function set_descricao($descricao) {
        $this->descricao = $descricao;
   }
   public function get_descricao() {
        return $this->descricao;
   }
   public function set_figura($figura) {
        $this->figura = $figura;
   }
   public function get_figura() {
        return $this->figura;
   }
}
?>