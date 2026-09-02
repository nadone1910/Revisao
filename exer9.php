<?php
class Funcionario {
    public $nome;
    protected $salario;
    private $senhaAcesso;

    public function __construct($nome, $salario) {
        $this->nome = $nome;
        $this->salario = $salario;
    }
}

class Gerente extends Funcionario {
    public function exibirResumo() {
        return "Nome: $this->nome, Salário: $this->salario";
    }
}

/*
1. Sim, o método funciona sem erros
porque $salario é protected.

2. Não seria possível acessar $senhaAcesso dentro de gerente
porque ela é private.

3. Não, se diretor não estendesse funcionario, não teria acesso
a $salario
*/