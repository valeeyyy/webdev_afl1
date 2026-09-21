<?php

require("controller_member.php");

if (isset($_GET["updateID"])) {
    $member_id = $_GET["updateID"];
    $member = getMemberID($member_id);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Member</title>
</head>

<style>
* {
    margin: 0;
    box-sizing: border-box;
}
</style>

<body style="font-family: Arial, sans-serif;">
    <div style="padding: 35px 40px;">
        <h2 style="margin-bottom: 20px;">Update Member</h2>
        <form method="POST" action="controller_member.php">
            <label>NIM</label><br>
            <input type="text" name="nim" placeholder="Enter NIM" value="<?= $member->getNim() ?>"
                style="width: 100%; padding: 12px; margin: 8px 0 18px; border: 1px solid #ccc; border-radius: 6px;">

            <label>Full Name</label><br>
            <input type="text" name="name" placeholder="Enter full name" value="<?= $member->getName() ?>"
                style="width: 100%; padding: 12px; margin: 8px 0 18px; border: 1px solid #ccc; border-radius: 6px;">

            <label>Email</label><br>
            <input type="email" name="email" placeholder="Enter email" value="<?= $member->getEmail() ?>"
                style="width: 100%; padding: 12px; margin: 8px 0 18px; border: 1px solid #ccc; border-radius: 6px;">

            <label>Phone Number</label><br>
            <input type="text" name="number" placeholder="Enter phone number" value="<?= $member->getNumber() ?> "
                style="width: 100%; padding: 12px; margin: 8px 0 25px; border: 1px solid #ccc; border-radius: 6px;">

            <input type="hidden" name="id" value="<?= $member_id ?>">
            <button name="update" type="submit"
                style="width: 100%; padding: 12px; background-color: #212529; color: white; border: none; border-radius: 6px;">Update
                Member</button>
        </form>
    </div>
</body>

</html>