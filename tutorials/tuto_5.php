<?php
// One to One
class Person
{
  private $id;
  private $nam;
  private $passport;

  public function setPassport(Passport $passport): void
  {
    $this->passport = $passport;
    $passport->setPerson($this);
  }
}

class Passport
{
  private $numero;
  private $dateExpiration;
  private $person;

  public function setPerson(Person $person): void
  {
    $this->person = $person;
  }
}

$person = new Person(1, "fahd");
$passport = new Passport(1, "2025-01-01");

$person->setPassport($passport);
$passport->setPerson($person);

// One to Many
class Author
{
  private $id;
  private $name;
  /** @var Book[] */
  private $books = [];

  public function addBook(Book $book): void
  {
    $this->books[] = $book;
    $book->setAuthor($this);
  }
}

class Book
{
  private $id;
  private $titre;
  private $author;

  public function setAuthor($author)
  {
    $this->author = $author;
  }
}

$author = new Author(1, "fahd");
$book1 = new Book(1, "something");
$book2 = new Book(2, "someone");
$author->addBook($book1);
$author->addBook($book2);

// Many-to-Many
class Student
{
  private $id;
  private $name;
  /** @var Course[] */
  private $course = [];

  public function addCourse(Course $course): void
  {
    $this->course[] = $course;
    $course->addStudent($this);
  }
}

class Course
{
  private $id;
  private $name;
  /** @var Student[] */
  private $students = [];

  public function addStudent(Student $student): void
  {
    $this->students[] = $student;
  }
}

$student_1 = new Student();
$student_2 = new Student();

$course_1 = new Course();
$course_2 = new Course();

$student_1->addCourse($course_1);
$student_1->addCourse($course_2);

$student_2->addCourse($course_1);
