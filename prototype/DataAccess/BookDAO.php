<?php

require("../DB/DataBase.php");

class BookDAO
{
  public function getBooks()
  {
    $dataBase = new DataBase();
    return $dataBase->Books;
  }

  public function setBook($book)
  {
    $dataBase = new DataBase();
    $dataBase->Books[] = $book;
    $dataBase->saveData();
  }
}
