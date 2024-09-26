<?php
require_once 'userService.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];

  $service = new userService();
  if ($name !== "mohamed") {
    $service->addUser($name, $email);
  } else {
    echo "no";
  }
  echo "Used added successfully.";
}
