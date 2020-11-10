<?php

    class Venda{
        private $data;
        private $produto;
        private $quantidade;
        private $valorTotal;

        public function __construct($data, $produto, $quantidade, $valorTotal)
        {
            $this->data = $data;
            $this->produto = $produto;
            $this->quantidade = $quantidade;
            $this->valorTotal = $valorTotal;
        }

        public function setData($data)
        {
            $this->data = $data;
        }

        public function getData()
        {
            return $this->data;
        }

        public function setProduto($produto)
        {
            $this->produto = $produto;
        }

        public function getProduto()
        {
            return $this->produto;
        }

        public function setQuantidade($quantidade)
        {
            $this->quantidade = $quantidade;
        }
        public function getQuantidade()
        {
            return $this->quantidade;
        }

        public function setValorTotal($valorTotal)
        {
            $this->valorTotal = $valorTotal;
        }
        public function getValorTotal()
        {
            echo $this->quantidade * $this->valorTotal;
        }
    }

    $venda = new Venda(
        '05/08/2020',
        'Caneta',
        '1',
        '10'
    );

    //echo $venda->getValorTotal();
    //exit();
    class ContaBancaria
    {
        /**
         * @var string
         */
        // public - private - protect
        private $banco;

        /**
         * @var string
         */
        private $nomeTitular;

        /**
         * @var string
         */
        private $numeroAgencia;

        /**
         * @var string
         */
        private $numeroConta;

        /**
         * @var float
         */
        private $saldo;

        public function __construct(
            string $banco,
            string $nomeTitular,
            string $numeroAgencia,
            string $numeroConta,
            float $saldo
        )
        {
            $this->banco = $banco;
            $this->nomeTitular = $nomeTitular;
            $this->numeroAgencia = $numeroAgencia;
            $this->numeroConta = $numeroConta;
            $this->saldo = $saldo;
        }

        public function obterSaldo() : string
        {
            return 'Seu saldo atual é: R$ ' .$this->saldo;
        }

        public function depositar(float $valor) : string
        {
            $this->saldo += $valor;
            return 'Depósito de R$ ' . $valor . ' realizado';
        }
        public function sacar(float $valor) : string
        {
            $this->saldo -= $valor;
            return 'Saque de R$ ' . $valor . ' realizado';
        }
    }

    $conta = new ContaBancaria(
        'Banco do Brasil',// banco
        'Gustavo Fraga',// nomeTitular
        '8244',// numeroAgencia
        '57354-10',// numeroConta
        0// Saldo
    );

    var_dump($conta);

    $conta2 = new ContaBancaria(
        'Caixa Ecnomica',// banco
        'Joana Silva',// nomeTitular
        '4324',// numeroAgencia
        '58978-10',// numeroConta
        300// Saldo
    );

    var_dump($conta2);
    /*
    echo $conta->obterSaldo(); //0

    echo "<br>";

    echo $conta->depositar(300);

    echo "<br>";

    echo $conta->obterSaldo(); //300

    echo "<br>";

    echo $conta->sacar(150.00);

    echo "<br>";

    echo $conta->obterSaldo(); //300
    */