<?php

class Carro 
{
    private string $placa;
    private string $modelo;
    private string $marca;
    private float $valor;
    private bool $alugado;
    private static int $quantidade = 0;
    private int $numeroDoCarro;

    public function __construct(string $placa, string $modelo, string $marca, float $valor)
    {
        $this->verificarPlaca($placa);
        $this->placa = $placa;
        $this->modelo = $modelo;
        $this->marca = $marca;
        $this->valor = $valor;
        $this->alugado = false;
        
        self::$quantidade++;
        $this->numeroDoCarro = self::$quantidade;
    }

    public function __destruct()
    {
        self::$quantidade--;
    }

    public function alugar(): void
    {
        if ($this->alugado == true) {
            echo "O carro está alugado" . PHP_EOL;
            return;
        }

        $this->alugado = true;
        echo "Carro $this->placa alugado" . PHP_EOL;
    }

    public function alterarValor($novoValor): void
    {
        if ($novoValor == $this->valor) {
            echo "Adicione um valor diferente!" . PHP_EOL;
        }
    }

    public function exibir(): void
    {
        echo "Carro " . $this->getNumeroDoCarro() . PHP_EOL;
        echo $this->getPlaca() . PHP_EOL;
        echo "Modelo: " . $this->getModelo() . PHP_EOL;
        echo "Marca: " . $this->getMarca() . PHP_EOL;
        echo "Valor R$" . $this->getValor() . PHP_EOL;
    }

    // Getters e setters
    public function getPlaca(): string
    {
        return $this->placa;
    }

    public function getModelo(): string 
    {
        return $this->modelo;
    }

    public function getMarca(): string
    {
        return $this->marca;
    }

    public function getValor(): float
    {
        return $this->valor;
    }

    public function getAlugado(): bool
    {
        return $this->alugado;
    }

    public static function getQuantidade(): int
    {
        return self::$quantidade;
    }

    public function getNumeroDoCarro(): int {
        return $this->numeroDoCarro;
    }

    private function verificarPlaca(string $placa): void 
    {
        if (strlen($placa) != 8) {
            echo 'Placa inválida';
            exit();
        }
    }
}