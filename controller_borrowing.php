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
    $_SESSION['borrowings'] = [];

    if (isset($allMembers[0]) && isset($allBooks[1])) {
        $_SESSION['borrowings'][] = new Borrowing($allMembers[0], $allBooks[1]);
    }
    if (isset($allMembers[1]) && isset($allBooks[0])) {
        $_SESSION['borrowings'][] = new Borrowing($allMembers[1], $allBooks[0]);
    }
}

function getBorrowingID($borrowingID) {
    return $_SESSION['borrowings'][$borrowingID];
}

function updateBorrowing($borrowingID, $memberIndex, $bookIndex) {
    global $allMembers, $allBooks;
    $_SESSION['borrowings'][$borrowingID] = new Borrowing($allMembers[$memberIndex], $allBooks[$bookIndex]);
}

function deleteBorrowing($borrowingID) {
    unset($_SESSION['borrowings'][$borrowingID]);
    $_SESSION['borrowings'] = array_values($_SESSION['borrowings']);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add'])) {
    $memberIndex = $_POST['member_index'];
    $bookIndex = $_POST['book_index'];

    if (isset($allMembers[$memberIndex]) && isset($allBooks[$bookIndex])) {
        $member = $allMembers[$memberIndex];
        $book = $allBooks[$bookIndex];
        $found = false;

        foreach ($_SESSION['borrowings'] as $i => $borrowing) {
            if ($borrowing->getMember()->getNim() === $member->getNim()) {
                $_SESSION['borrowings'][$i] = new Borrowing($member, $book); 
                $found = true;
                break;
            }
        }

        if (!$found) {
            $_SESSION['borrowings'][] = new Borrowing($member, $book);
        }
    }

    header("Location: view_borrowing.php");
    exit();
}

$borrowings = $_SESSION['borrowings'];
?>