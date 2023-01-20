<?php

class Stores {

  
}
class bankAccount
{

    public $accNumber;
    protected $type;
    private $owner;
    private $balance;
    private $status;
    public function openAccount($type)
    {
        $this->setType($type);
        $this->setStatus(true);
        if ($type == "CC") {
            $this->setBalance(50);
        } elseif ($type == "CP") {
            $this->balance = 150;
        }
    }

    public function closeAccount()
    {
        if ($this->getBalance() > 0) {
            print "<p>Conta ainda tem dinheiro, não posso fecha-la!</p/";
        } else if ($this->balance < 0) {
            print "<p>Conta em débito, não é possivel fecha-la</p>";
        } else {
            $this->setStatus(false);
            echo "Conta de ".$this->getOwner()." fechada com sucesso</p>";
        }
    }

    public function deposit($v)
    {
        if ($this->getStatus()) {
            $this->setBalance($this->getBalance() + $v);
            //$this->balance = $this->balance + $v;
            echo "Depósito de R$ $v, na conta de " . $this->getOwner() . "</p>";
        } else {
            echo "<p>Conta fechada. Não é possivel depositar.</p>";
        }
    }

    public function withdrawn($v)
    {
        if ($this->getStatus()) {
            if ($this->getBalance() >= $v) {
                //$this->balance = $this->balance - $v;   MESMA COISA DA LINHA ABAIXO.
                $this->setBalance($this->getBalance() - $v);
                echo "<p>Saque de R$ $v autorizado na conta de " . $this->getOwner() . "</p>";
            } else {
                echo "<p>Saldo insuficiente para saque</p>.";
            }
        } else {
            echo "<p>Não posso sacar de uma conta fechada</p>";
        }
    }

    public function monthlyDebit()
    {
        if ($this->getType() == "CC") {
            $v = 12;
        } else if ($this->getType() == "CP") {
            $v = 20;
        }
        if ($this->getStatus()) {
            $this->setBalance($this->getBalance() - $v);
            echo "<p>Mensalidade de R$ $v debitada na conta de " . $this->getOwner() . "</p>";
        } else {
            echo "</p>Problemas na conta de " . $this->getOwner() . ". Não é possivel cobrar";
        }
    }

    public function __construct()
    {
        $this->setBalance(0);
        $this->setStatus(false);
        echo "<p>Conta criada com sucesso!</p>";
    }
    public function getOwner()
    {
        return $this->owner;
    }
    public function setOwner($dono)
    {
        $this->owner = $dono;
    }
    public function getBalance()
    {
        return $this->balance;
    }
    public function setBalance($saldo)
    {
        $this->balance = $saldo;
    }

    public function setAccNum($accNum)
    {
        $this->accNumber = $accNum;
    }
    public function getAccNum()
    {
        return $this->accNumber;
    }

    public function setType($tipo)
    {
        $this->type = $tipo;
    }
    public function getType()
    {
        return $this->type;
    }

    public function setStatus($stats)
    {
        $this->status = $stats;
    }

    public function getStatus()
    {
        return $this->status;
    }
}
