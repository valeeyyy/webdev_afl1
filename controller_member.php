<?php
include("model_member.php");
session_start();

if (!isset($_SESSION['memberlist'])) {
    $_SESSION['memberlist'] = [
        new model_member("1076012510035", "Marsha Valerie", "valerie@gmail.com", "08123456789"),
        new model_member("1076012510029", "Christa Caitlyn", "christa@gmail.com", "08198765432")
    ];
}

function createMember() {
    $member = new model_member($_POST['nim'], $_POST['name'], $_POST['email'], $_POST['number']);
    array_push($_SESSION['memberlist'], $member);
}

function getAllMembers() {
    return  $_SESSION['memberlist'];
}

function deleteMember($memberIndex) {
    unset($_SESSION['memberlist'][$memberIndex]);
    $_SESSION['memberlist'] = array_values($_SESSION['memberlist']);
}

function updateMember($memberID) {
    $_SESSION['memberlist'][$memberID] = new model_member(
        $_POST['nim'],
        $_POST['name'],
        $_POST['email'],
        $_POST['number']
    );
}

function getMemberID($memberID) {
    return $_SESSION['memberlist'][$memberID];
}

if (isset($_POST['register'])) {
    createMember();
    header("Location: view_member.php");
    exit;
}

if (isset($_GET['deleteID'])) {
    deleteMember($_GET['deleteID']);
    header("Location: view_member.php");
    exit;
}

if (isset($_POST['update'])) {
    updateMember($_POST['id']);
    header("Location: view_member.php");
    exit;
}
?>