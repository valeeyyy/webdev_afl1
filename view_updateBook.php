<?php

require("controller_book.php");

if (isset($_GET["updateID"])) {
    $book_id = $_GET["updateID"];
    $book = getBookID($book_id);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Book</title>
</head>

<style>
* {
    margin: 0;
    box-sizing: border-box;
}
</style>

<body style="font-family: Arial, sans-serif;">
    <div style="padding: 35px 40px;">
        <h2 style="margin-bottom: 20px;">Update Book</h2>
        <form method="POST" action="controller_book.php">
            <label>Title</label><br>
            <input type="text" name="title" placeholder="Enter title" value="<?= $book->getTitle() ?>"
                style="width: 100%; padding: 12px; margin: 8px 0 18px; border: 1px solid #ccc; border-radius: 6px;">

            <label>Author</label><br>
            <input type="text" name="author" placeholder="Enter author" value="<?= $book->getAuthor() ?>"
                style="width: 100%; padding: 12px; margin: 8px 0 18px; border: 1px solid #ccc; border-radius: 6px;">

            <label>Publisher</label><br>
            <input type="text" name="publisher" placeholder="Enter publisher" value="<?= $book->getPublisher() ?>"
                style="width: 100%; padding: 12px; margin: 8px 0 18px; border: 1px solid #ccc; border-radius: 6px;">

            <label>Genre</label><br>
            <input type="text" name="genre" placeholder="Enter genre" value="<?= $book->getGenre() ?> "
                style="width: 100%; padding: 12px; margin: 8px 0 25px; border: 1px solid #ccc; border-radius: 6px;">

            <input type="hidden" name="id" value="<?= $book_id ?>">
            <button name="update" type="submit"
                style="width: 100%; padding: 12px; background-color: #212529; color: white; border: none; border-radius: 6px;">Update
                Book</button>
        </form>
    </div>
</body>

</html>