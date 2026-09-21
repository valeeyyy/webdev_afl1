<?php 

include_once("model_member.php");
include_once("model_book.php");
include_once("model_borrowing.php");
include_once("controller_member.php");
include_once("controller_book.php");

if (!isset($_SESSION)) {
    session_start();
}

$allMembers = getAllMembers();
$allBooks = getAllBooks();

$borrowings = [
    new Borrowing($allMembers[0], $allBooks[1]),
    new Borrowing($allMembers[1], $allBooks[0])
];
?>