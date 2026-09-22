<?php include_once("controller_book.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Books</title>
</head>

<style>
* {
    margin: 0;
    box-sizing: border-box;
}
</style>

<body style="font-family: Arial, sans-serif;">
    <nav
        style="width: 100%; background-color: #f5f5f5; padding: 25px 40px; display: flex; justify-content: space-between; align-items: center; box-shadow: 0 2px 8px rgba(0,0,0,0.15);">
        <h2 style="color: black;">Library Management</h2>
        <div>
            <a href="view_member.php" style="color: black; text-decoration: none; margin-right: 35px;">Members</a>
            <a href="view_book.php"
                style="color: black; text-decoration: none; margin-right: 25px; font-weight: bold">Books</a>
            <a href="view_borrowing.php" style="color: black; text-decoration: none;">Borrowings</a>
        </div>
    </nav>


    <div style="padding: 35px 40px;">
        <h2 style="margin-bottom: 20px;">List of Books</h2>

        <table style="width: 100%;  border-collapse: collapse;">
            <thead>
                <tr style="background-color: #212529; color: white; text-align: left;">
                    <th style="padding: 12px 15px;">No</th>
                    <th style="padding: 12px 15px;">Name/Title</th>
                    <th style="padding: 12px 15px;">Author</th>
                    <th style="padding: 12px 15px;">Publisher</th>
                    <th style="padding: 12px 15px;">Genre</th>
                    <th style="padding: 12px 15px;">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $counter = 0;
                $allBooks = getAllBooks();
                foreach ($allBooks as $index => $book) {
                    $counter++;
                    ?>
                <tr style="border-bottom: 1px solid #dee2e6;">
                    <td style="padding: 15px;"><?= $counter ?></td>
                    <td style="padding: 15px;"><?= $book->getTitle() ?></td>
                    <td style="padding: 15px;"><?= $book->getAuthor() ?></td>
                    <td style="padding: 15px;"><?= $book->getPublisher() ?></td>
                    <td style="padding: 15px;"><?= $book->getGenre() ?></td>
                    <td style="padding: 15px;">
                        <a href="view_updateBook.php?updateID=<?= $index ?>"
                            style="background-color: #ffc107; color: #000; text-decoration: none; padding: 10px 20px; border-radius: 6px; display: inline-block;">Update</a>
                        <a href="controller_book.php?deleteID=<?= $index ?>"
                            style="background-color: #dc3545; color: #fff; text-decoration: none; padding: 10px 20px; border-radius: 6px; display: inline-block; margin-left: 5px;">Delete</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <div style="padding: 35px 40px;">
        <h2 style="margin-bottom: 20px;">Add New Book</h2>
        <form method="POST" action="controller_book.php">
            <label>Title</label><br>
            <input type="text" name="title" placeholder="Enter title"
                style="width: 100%; padding: 12px; margin: 8px 0 18px; border: 1px solid #ccc; border-radius: 6px;">

            <label>Author</label><br>
            <input type="text" name="author" placeholder="Enter author"
                style="width: 100%; padding: 12px; margin: 8px 0 18px; border: 1px solid #ccc; border-radius: 6px;">

            <label>Publisher</label><br>
            <input type="text" name="publisher" placeholder="Enter publisher"
                style="width: 100%; padding: 12px; margin: 8px 0 18px; border: 1px solid #ccc; border-radius: 6px;">

            <label>Genre</label><br>
            <input type="text" name="genre" placeholder="Enter genre"
                style="width: 100%; padding: 12px; margin: 8px 0 25px; border: 1px solid #ccc; border-radius: 6px;">

            <button name="register" type="submit"
                style="width: 100%; padding: 12px; background-color: #212529; color: white; border: none; border-radius: 6px;">Add
                Book</button>
        </form>
    </div>
</body>

</html>