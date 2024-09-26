<?php
class Book
{
  public $titre;
  public $isbn;
  /** @var Author[] */
  public $authors;

  // Add a constructor for easy initialization
  public function __construct($titre = "", $isbn = "", $authors = [])
  {
    $this->titre = $titre;
    $this->isbn = $isbn;
    $this->authors = $authors;
  }
}

class Author
{
  public $last_name;
  public $first_name;

  // Add a constructor for easy initialization
  public function __construct($last_name = "", $first_name = "")
  {
    $this->last_name = $last_name;
    $this->first_name = $first_name;
  }
}

$book1 = new Book();
$book1->titre = "Le Petit Prince";
$book1->isbn = "9782266000016";
$book1->authors = [
  new Author("Saint-Exupéry", "Antoine de")
];

// Saving an object in a JSON file
function saveBookInAFile(Book $book, string $file)
{
  $json = json_encode($book, JSON_PRETTY_PRINT);
  file_put_contents($file, $json);
}

// Reading an object from a JSON file
function readBookFromAFile(string $file): Book
{
  $json = file_get_contents($file);
  $data = json_decode($json);

  // Create Book instance
  $book = new Book();
  $book->titre = $data->titre ?? "";
  $book->isbn = $data->isbn ?? "";

  // Create Author instances
  $book->authors = [];
  if (isset($data->authors)) {
    foreach ($data->authors as $authorData) {
      $author = new Author();
      $author->last_name = $authorData->last_name ?? "";
      $author->first_name = $authorData->first_name ?? "";
      $book->authors[] = $author;
    }
  }

  return $book;
}

// Save the book to a file
saveBookInAFile($book1, "tuto_7.json");

// Read the book from the file and print details
$book = readBookFromAFile("tuto_7.json");
echo "Title: " . $book->titre . "\n";
echo "ISBN: " . $book->isbn . "\n";
echo "Authors:\n";
foreach ($book->authors as $author) {
  echo "- " . $author->first_name . " " . $author->last_name . "\n";
}
