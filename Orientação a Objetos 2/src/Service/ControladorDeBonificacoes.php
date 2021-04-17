<?php

namespace Alura\Banco\Service;

use Alura\Banco\Model\Funcionario;

class ControladorDeBonificacoes 
{
    private float $totalBonificacoes = 0;

    public function adicionarBonificacao(Funcionario $funcionario): void
    {
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }

    public function getTotalBonificacoes(): float
    {
        return $this->totalBonificacoes;
    }
}