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

if (!isset($_SESSION['borrowings'])) {
    $borrowings = $_SESSION['borrowings'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['member_index']) && isset($_POST['book_index'])) {
    $memberIndex = $_POST['member_index'];
    $bookIndex = $_POST['book_index'];

    $_SESSION['borrowings'][] = new Borrowing($allMembers[$memberIndex], $allBooks[$bookIndex]);

    header("Location: view_borrowing.php");
        exit();
}

$borrowings = [
    new Borrowing($allMembers[0], $allBooks[1]),
    new Borrowing($allMembers[1], $allBooks[0])
];
?>