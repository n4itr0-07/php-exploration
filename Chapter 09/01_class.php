<?php

class BankAccount
{
    public $accountNumber;

    public $balance;

    public function deposit($amount)
    {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }
}


$account = new BankAccount();

$account->accountNumber = 1;
$account->balance = 100;

$account->deposit(100);

echo "The bank account {$account->accountNumber} has a balance of {$account->balance}USD";