<?php 
    include_once("controller_borrowing.php"); 
    include_once("controller_book.php");
    include_once("controller_member.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrowings</title>
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
            <a href="view_book.php" style="color: black; text-decoration: none; margin-right: 35px;">Books</a>
            <a href="view_borrowing.php"
                style="color: black; text-decoration: none; margin-right: 25px; font-weight: bold">Borrowings</a>
        </div>
    </nav>

    <div style="padding: 35px 40px;">
        <h2 style="margin-bottom: 20px;">Borrowings</h2>

        <table style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr style="background-color: #212529; color: white; text-align: left;">
                    <th style="padding: 12px 15px;">Member</th>
                    <th style="padding: 12px 15px;">Book</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($borrowings as $borrowing) { ?>
                    <tr style="border-bottom: 1px solid #dee2e6;">
                        <td style="padding: 15px;"><?= $borrowing->getMember()->getName() ?></td>
                        <td style="padding: 15px;"><?= $borrowing->getBook()->getTitle() ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>