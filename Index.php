<?php

class BankAccount {
	public $balance = 100000000;
	
	public function DisplayBalance(){
		return 'Balance: '.$this->balance;
	}
	
	public function Withdraw($amount){
		if (($this->balance)<$amount){
			echo 'Not enough money.'.'<br>';
		} else {
		$this->balance = $this->balance - $amount;
		}
	}
	
}

// new instance of class
$ref = new BankAccount ;

// withdrawing 5
$ref->Withdraw(600000000000000);

// displaying balance
echo $ref->DisplayBalance() ;

?>  





Extendors and apps of it

<?php
class BankAccount {
	public $balance = 0;
	public $type = '';
	
	public function SetType($input){
		$this->type = $input;
	}
	
	public function DisplayBalance(){
		return 'Balance: '.$this->balance;
	}
	
	public function Withdraw($amount){
		if (($this->balance)<$amount){
			echo 'Not enough money.'.'<br>';
		} else {
		$this->balance = $this->balance - $amount;
		}
	}
	
	public function Deposite($amount){
		$this->balance = $this-> balance + $amount;
	}
}


class SavingsAccount extends BankAccount{
	
}
	
	$ref = new BankAccount;
	$ref->SetType('18-25 Current');
	$ref->Deposite(300);
	$ref->Withdraw(100);
	
	$ref_savings = new SavingsAccount;
	$ref_savings->SetType('Super Saver');
    $ref_savings->Deposite(2000);

echo $ref->DisplayBalance().'<br>';
echo $ref_savings->DisplayBalance().'<br>';
echo $ref->type.' has '.$ref->DisplayBalance().'<br>';
echo $ref_savings->type.' has '.$ref_savings->DisplayBalance();


?>  





<?php

//OOP

// Object Orianted Programing 

?>  


private

<?php

class BankAccount {

	private $balance = 3500;
	
	private function DisplayBalance(){
		return 'Balance: '.$this->balance;
	}
}


$ref = new BankAccount ;
echo $ref->DisplayBalance() ;

?>






full use kinda off :p

<?php
class BankAccount {
	public $balance = 0;
	
	public function DisplayBalance(){
		return 'Balance: '.$this->balance;
	}
	
	public function Withdraw($amount){
		if (($this->balance)<$amount){
			echo 'Not enough money.'.'<br>';
		} else {
		$this->balance = $this->balance - $amount;
		}
	}
	
	public function Deposite($amount){
		$this->balance = $this-> balance + $amount;
	}
	
}

$ref = new BankAccount ;
$okka = new BankAccount ;

$refa3y = 'Refaie';

$ref->Deposite(1000);
$ref->Withdraw(100000);
echo $ref->DisplayBalance().'<br>' ;

$okka->Deposite(1000000000);
$okka->Withdraw(200);
echo $okka->DisplayBalance() ;


?>  












































