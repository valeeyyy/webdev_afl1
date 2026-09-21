<?php 

class Borrowing {
    private $member;
    private $book;

    public function __construct($member, $book) {
        $this -> member = $member;
        $this -> book = $book;
    }

    public function getMember() {
        return $this -> member;
    }

    public function getBook() {
        return $this -> book;
    }
}
?>