<?php
require_once 'UserDAO.php';

class UserService extends UserDAO
{
  // private $userDAO;

  // public function __construct()
  // {
  //   $this->userDAO = new UserDAO();
  // }

  public function addUser($name, $email)
  {
    return parent::addUser($name, $email);
  }
}
