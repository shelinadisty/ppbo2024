<?php

<?php


require_once "Author";
require_once "Publisher";
require_once "Book";

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