<?php
include('model_book.php');

session_start();

if (!isset($_SESSION['bookList'])) {
    $_SESSION['bookList'] = [
        new model_book("The Great Gatsby", "F. Scott Fitzgerald", "Charles Scribner's Sons", "Historical Fiction"),
        new model_book("If You Could See The Sun", "Ann Liang", "Inkyard Press", "Young Adult")
    ];
}

function createBook() {
    $book = new model_book(
        $_POST['title'],
        $_POST['author'],
        $_POST['publisher'],
        $_POST['genre']
    );
    array_push($_SESSION['bookList'], $book);
}

function getAllBooks() {
    return $_SESSION['bookList'];
}

function deleteBook($bookIndex) {
    unset($_SESSION['bookList'][$bookIndex]);
    $_SESSION['bookList'] = array_values($_SESSION['bookList']);
}

function updateBook($bookID) {
    $_SESSION['bookList'][$bookID] = new model_book(
        $_POST['title'],
        $_POST['author'],
        $_POST['publisher'],
        $_POST['genre']
    );
}

function getBookID($bookID) {
    return $_SESSION['bookList'][$bookID];
}

if (isset ($_POST['register'])) {
    createBook();
    header("Location:view_book.php");
    exit;
}

if (isset ($_GET['deleteID'])) {
    deleteBook($_GET['deleteID']);
    header("Location: view_book.php");
    exit;
}

if (isset($_POST['update'])) {
    updateBook($_POST['id']);
    header("Location: view_book.php");
    exit;
}

?>