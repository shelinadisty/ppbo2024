<?php
class Author {
public $name;
public $description;
}
class Publisher {
    public $name;
    public $address;
    public $phone;

    public function setPhone($phone) {
        $this->phone = $phone;
    }
    public function getPhone() {
        return $this->phone;
    }
}
class Book {
public $ISBN;
public $title;
public $description;
public $category;
public $language;
public $numberOfPage;
public $author;
public $publisher;
public function showAll() {
    return[
        'ISBN' => $this-> ISBN,
        'Title' => $this-> title,
        'Description' => $this -> description,
        'Language' => $this -> language,
        'Number of Page' => $this -> numberOfPage,
        'Author' => $this -> author,
        'Publisher' => $this -> publisher,
    ];

}

public function detail($ISBN) {
    if ($this->ISBN == $ISBN) {
        return $this->showAll();
    }
    return null;
  }
}

$author = new Author();
$author->name = "F. Scott Fitzgerald";
$author->description= "Penulis Buku";

$publisher = new Publisher();
$publisher->name = "Charles Scribner's Sons";
$publisher->address = "NYC, USA";
$publisher->setPhone ("+1 (212) 6987000");

$book = new Book ();
$book-> ISBN = 978-0743273565;
$book-> title = "The Great Gatsby";
$book-> description = "Sebuah Novel yang berlatar di Jazz Age yang menceritakan kisah cinta tak terbalas Jay Gatsby terhdap Daisy Buchanan";
$book-> category = "Novel";
$book-> language = "English";
$book-> numberOfPage = 180;
$book-> author = $author->name;
$book-> publisher = $publisher->name;

print_r($book->showAll());

?>