<?php

require("controller_borrowing.php");

if (isset($_GET["updateID"])) {
    $borrowing_id = $_GET["updateID"];
    $borrowing = getBorrowingID($borrowing_id);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Borrowing</title>
</head>

<style>
* {
    margin: 0;
    box-sizing: border-box;
}
</style>

<body style="font-family: Arial, sans-serif;">
    <div style="padding: 35px 40px;">
        <h2 style="margin-bottom: 20px;">Update Borrowing</h2>
        <form method="POST" action="controller_borrowing.php">
            <label>Member</label><br>
            <select name="member_index"
                style="width: 100%; padding: 12px; margin: 8px 0 18px; border: 1px solid #ccc; border-radius: 6px;">
                <?php foreach ($allMembers as $index => $member) { ?>
                    <option value="<?= $index ?>" <?= ($member === $borrowing->getMember()) ? "selected" : "" ?>>
                        <?= $member->getName() ?>
                    </option>
                <?php } ?>
            </select>

            <label>Book</label><br>
            <select name="book_index"
                style="width: 100%; padding: 12px; margin: 8px 0 25px; border: 1px solid #ccc; border-radius: 6px;">
                <?php foreach ($allBooks as $index => $book) { ?>
                    <option value="<?= $index ?>" <?= ($book === $borrowing->getBook()) ? "selected" : "" ?>>
                        <?= $book->getTitle() ?>
                    </option>
                <?php } ?>
            </select>

            <input type="hidden" name="borrowing_id" value="<?= $borrowing_id ?>">
            <button name="update_borrowing" type="submit"
                style="width: 100%; padding: 12px; background-color: #212529; color: white; border: none; border-radius: 6px;">Update
                Borrowing</button>
        </form>
    </div>
</body>

</html>
