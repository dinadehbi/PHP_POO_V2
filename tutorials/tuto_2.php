<?php
class User
{
  private $firstName;
  private $lastName;
  private $email;

  public function __construct($firstName, $lastName, $email)
  {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->email = $email;
  }

  public function getFirstName()
  {
    return $this->firstName;
  }

  public function setLastName($lastName)
  {
    $this->lastName = $lastName;
  }
}

$user = new User("fahd", "suirita", "fahd.suirita@gmail.com");
echo $user->getFirstName();
echo $user->setLastName("fahd");

class BankAccount
{
  private $balance;

  public function __construct($balanceInitial)
  {
    $this->balance = $balanceInitial;
  }

  public function getBalance()
  {
    return $this->balance;
  }

  public function deposer($Amount)
  {
    if ($Amount > 0) {
      $this->balance += $Amount;
    } else {
      echo "The Amount must be positive .";
    }
  }

  public function retirer($Amount)
  {
    if ($Amount <= $this->balance) {
      $this->balance -= $Amount;
    } else {
      echo "balance insufficient.";
    }
  }
}

$myBankAccount = new BankAccount(1000);
$myBankAccount->deposer(500);
$myBankAccount->retirer(250);
echo $myBankAccount->getBalance();
