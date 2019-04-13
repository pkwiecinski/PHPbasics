<?php

class Books {
   // Members of class Book
    var $price;
    var $title;
    var $author;

    function setPrice($par) {
        $this->price = $par;
    }
    function getPrice(){
        return $this->price;
    }
    function __construct($title1,$author1) {
        $this->title = $title1;
        $this->author = $author1;
    }
}

$slownik = new Books("Slownik", "Ktoskto Siezna");
$podrecznik = new Books("Podrecznik", "Jan Kowalski");
$miliardy = new Books("Miliardy białych płatków", "Czesław Bałczyński");


?>

