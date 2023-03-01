<?php
if (!class_exists('Pessoa')) {
    class Pessoa
    {
        public $nome;
        public $idade;

        public function __construct($novoNome, $idade)
        {
            $this->nome = $novoNome;
            $this->idade = $idade;
            echo 'Pessoa Criada! <br>';
        }

        public function __destruct()
        {
            echo 'Pessoa diz: Tchau!!<br>';
        }

        public function apresentar()
        {
            echo "{$this->nome}, {$this->idade} anos<br>";
        }
    }
}
