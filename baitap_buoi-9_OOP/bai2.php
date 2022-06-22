<?php
  class Bank
  {
    private $accNo, $name, $balance;

    public function __construct($accNo, $name, $balance)
    {
      $this->accNo = $accNo ; 
      $this->name = $name ;
      $this->balance = $balance ;
    }

    public function depositAmount($amount)
    {
      $this->balance += $amount ; 
    }

    public function deductAmount($amount)
    {
      if ( $this->balance < 0 ) 
      {
        return "No Balance in account" ; 
      }
      else if ( $this->balance < $amount )
      {
        "Request amount is greater than balance";
      }
      else 
      {
        $this->balance -= $amount ; 
      }
      
    }

    public function checkBalance()
    {
      return $this->balance ; 
    }
  }

  $bank = new Bank("1", "Thuan", 500000);
  echo $bank->checkBalance();
  echo $bank->deductAmount("200000");
  echo $bank->checkBalance();
?>