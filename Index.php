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



















































