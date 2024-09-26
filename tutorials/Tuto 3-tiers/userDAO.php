<?php
// UserDAO.php
class UserDAO
{
  private $pdo;

  public function __construct()
  {
    $this->pdo = new PDO('mysql:host=localhost;dbname=library', 'tuto_3', '');
  }

  public function addUser($name, $email)
  {
    $sql = "INSERT INTO users (name, email) VALUES (:name, :email)";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
  }
}
