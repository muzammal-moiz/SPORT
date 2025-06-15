<?php
session_start();
require_once("admin/database.php");
$db = db::open();
$datee = date("d-m-Y");
// all insertion code start

if (isset($_POST['sign_in'])) {

    $db = db::open();

    $email = $db->real_escape_string($_POST['email']);
    $password = $db->real_escape_string($_POST['password']);

    $query = "SELECT * from user where email='$email' && password='$password'";
    $rec = db::getRecord($query);

    if ($rec != NULL) {
        $_SESSION["email"] = $email;
        echo "<script>location='user/index.php?status=Login_Successful'</script>";
    } else {
        echo "<script>location='sign_in.php?status=4'</script>";
    }
}