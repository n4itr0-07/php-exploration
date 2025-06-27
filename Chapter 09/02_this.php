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
		return $this;
	}

	public function withdraw($amount)
	{
		if ($amount <= $this->balance) {
			$this->balance -= $amount;
			return true;
		}
                return false;

	}

}

// create a new account object
$account = new BankAccount();

$account->accountNumber = 1;
$account->balance = 100;

$account->deposit(100)
	->withdraw(150);

echo "The bank account $account->accountNumber has a balance of $$account->balance";