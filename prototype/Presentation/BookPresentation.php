<?php
require("../Services/BookService.php");
require("../Entities/Book.php");

class BookPresentation
{
  public function viewBooks()
  {
    echo "\nViewing the list of Books\n";

    $bookService = new BookService();
    $books = $bookService->getBooks();

    if (!empty($books)) {
      foreach ($books as $bk) {
        echo "---------------------------------\n";
        echo "ISBN: " . $bk->getISBN() . "\n";
        echo "Title: " . $bk->getTitle() . "\n";
      }
    } else {
      echo "No books available.\n";
    }
    echo "---------------------------------\n\n";
  }

  public function addBook()
  {
    echo "\nAdding a new Book\n";
    $ISBN = askQuestion("Enter the ISBN of the book (or type 'back' to go back): ");
    if (strtolower($ISBN) === "back") {
      return;
    }

    $title = askQuestion("Enter the title of the book (or type 'back' to go back): ");
    if (strtolower($title) === "back") {
      return;
    }

    $new_book = new Book($ISBN, $title);
    $bookService = new BookService;
    $bookService->setBook($new_book);
    echo "Book added successfully\n\n";
  }

  public function delete($title) {
    echo "\nDeleting a Book:\n";
        $bookService = new BookService();
        $books = $bookService->getBooks();
        $bookFound = false;
    
    foreach ($books as $key => $book) {
        if (strtolower($book->getTitle()) == strtolower($title)) {  
            unset($books[$key]);  
            $bookService->setBook($books);  
            $bookFound = true;
            echo "Book with title '$title' has been deleted.\n";
            break;
        }
    }
        if (!$bookFound) {
        echo "Book with title '$title' not found.\n";
    }
}


}