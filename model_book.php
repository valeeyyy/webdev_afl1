<?php

class model_book{
    private $title;
    private $author;
    private $publisher;
    private $genre;

    public function __construct($title, $author, $publisher, $genre) {
        $this->title = $title;
        $this->author = $author;
        $this->publisher = $publisher;
        $this->genre = $genre;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getPublisher() {
        return $this->publisher;
    }

    public function getGenre() {
        return $this->genre;
    }
}

?>