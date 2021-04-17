<?php

namespace Alura\Banco\Model\Account;

class ContaPoupanca extends Conta
{
   protected function percentualTarifa(): float
   {
       return 0.03;
   }
}