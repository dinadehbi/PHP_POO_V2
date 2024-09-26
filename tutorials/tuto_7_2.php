<?php
class MyClass
{
  private $name;
  private $age;
  private $book = [];

  public function __construct($name, $age, $book)
  {
    $this->name = $name;
    $this->age = $age;
    $this->book = $book;
  }

  public function getInfo()
  {
    return "Name: " . $this->name . ", Age: " . $this->age .",Books:". $this->book;
  }
}

// // Create an object
// $object = new MyClass("John", 25, ["1", "2"]);

// // Serialize the object
// $serializedObject = serialize($object);

// // Save serialized object to a file
// file_put_contents('object_file.txt', $serializedObject);

// echo "Object saved successfully!";

// Read the serialized object from the file
$serializedObject = file_get_contents('object_file.txt');

// Unserialize the object to restore it
$object = unserialize($serializedObject);

// Access the object's methods or properties
echo $object->getInfo();  // Output: Name: John, Age: 25
