<?php
session_start();
require_once("database.php");
$db = db::open();
$datee = date("d-m-Y");
// all insertion code start
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query="SELECT * FROM admin WHERE email='$email' AND password='$password'";
    $rec = db::getRecord($query);
    if ($rec != NULL) {
        $_SESSION['email'] = $_POST['email'];
        header('location:dashboard.php');
    } else {
        header('location:index.php');
    }
}
//update admin
if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];
    if ($_FILES['doc_file']['name'] == "") {
        $sql2 = "UPDATE admin SET name='$name',password='$password'";
        $r = db::query($sql2);
        echo "<script>location='profile.php?status=1'</script>";
    } else {
        $file = rand(1000, 100000) . "-" . $_FILES['doc_file']['name'];
        $file_loc = $_FILES['doc_file']['tmp_name'];
        $file_size = $_FILES['doc_file']['size'];
        $file_type = $_FILES['doc_file']['type'];
        $folder = "uploads/";
        $new_file_name = strtolower($file);
        $final_file = str_replace(' ', '-', $new_file_name);
        $a = move_uploaded_file($file_loc, $folder . $final_file);
        $sql2 = "UPDATE admin SET name='$name',password='$password',image='$final_file'";
        $r = db::query($sql2);
        echo "<script>location='profile.php?status=1'</script>";

    }
}

//logout
if (isset($_GET['logout'])) {
    unset($_SESSION['email']);
    echo "<script>location='index.php'</script>";
}
// update_logo
if (isset($_POST['update_logo'])) {
    $dcp = $db->real_escape_string($_POST['dcp']);
    $id = ($_POST['id']);

    if ($_FILES['image']['name'] == "") {
        $sql = "UPDATE logo SET contant='$dcp'";
        db::query($sql);
    } else {
        $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
        $file_loc = $_FILES['image']['tmp_name'];
        $file_size = $_FILES['image']['size'];
        $file_type = $_FILES['image']['type'];
        $folder = "uploads/";
        $new_file_name = strtolower($file);
        $final_file = str_replace(' ', '-', $new_file_name);
        $a = move_uploaded_file($file_loc, $folder . $final_file);
        $sql = "UPDATE logo SET contant='$dcp',image='$final_file' ";
        db::query($sql);
    }
    echo "<script>location='logo.php'</script>";
}

// update_banner
if (isset($_POST['update_banner'])) {
    $heading =$db->real_escape_string ($_POST['heading']);
    $title =$db->real_escape_string ($_POST['title']);
    $dcp =$db->real_escape_string ($_POST['dcp']);
    $id = $db->real_escape_string($_POST['id']);

    if ($_FILES['image']['name'] == "") {
        $sql = "UPDATE banner SET heading='$heading',title='$title',dcp='$dcp'";
        db::query($sql);
    } else {
        $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
        $file_loc = $_FILES['image']['tmp_name'];
        $file_size = $_FILES['image']['size'];
        $file_type = $_FILES['image']['type'];
        $folder = "uploads/";
        $new_file_name = strtolower($file);
        $final_file = str_replace(' ', '-', $new_file_name);
        $a = move_uploaded_file($file_loc, $folder . $final_file);
        $sql = "UPDATE banner SET heading='$heading',title='$title',dcp='$dcp',image='$final_file' ";
        db::query($sql);
    }
    echo "<script>location='banner.php'</script>";
}

// update_admin
if (isset($_POST['update_admin'])) {
    $name = $db->real_escape_string($_POST['name']);
    $email = $db->real_escape_string($_POST['email']);
    $password = $db->real_escape_string($_POST['password']);
    $id = $db->real_escape_string($_POST['id']);

    $sql = "UPDATE admin SET name='$name',email='$email',password='$password'";
    db::query($sql); 
    echo "<script>location='profile.php'</script>";
}
//add_about
if (isset($_POST['add_about'])) {
    $heading =$db->real_escape_string($_POST['heading']);
    $dcp =$db->real_escape_string($_POST['dcp']);

    $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
    $file_loc = $_FILES['image']['tmp_name'];
    $file_size = $_FILES['image']['size'];
    $file_type = $_FILES['image']['type'];
    $folder = "uploads/";
    $new_file_name = strtolower($file);
    $final_file = str_replace(' ', '-', $new_file_name);
    $a = move_uploaded_file($file_loc, $folder . $final_file);
    $query_insert = "INSERT INTO `about` (`heading`,`image`,`dcp`) VALUES ('$heading','$final_file','$dcp')";
    db::query($query_insert);
    echo "<script>location='about.php'</script>";
}

//update_about
if (isset($_POST['update_about'])) {
    $heading = $db->real_escape_string($_POST['heading']);
    $dcp = $db->real_escape_string($_POST['dcp']);

    $id=$_POST['id'];
    if ($_FILES['image']['name'] == "") {
        $sql = "UPDATE about SET heading='$heading',dcp='$dcp' WHERE id='$id'";
        db::query($sql);
    } else {
        $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
        $file_loc = $_FILES['image']['tmp_name'];
        $file_size = $_FILES['image']['size'];
        $file_type = $_FILES['image']['type'];
        $folder = "uploads/";
        $new_file_name = strtolower($file);
        $final_file = str_replace(' ', '-', $new_file_name);
        $a = move_uploaded_file($file_loc, $folder . $final_file);
        $sql = "UPDATE about SET heading='$heading',dcp='$dcp',image='$final_file' WHERE id='$id'";
        echo db::query($sql);
    }
    echo "<script>location='about.php'</script>";
}
//del_about
if (isset($_GET['del_about'])) {
    $id = $_GET['del_about'];
    $sql = "DELETE FROM about WHERE id='$id'";
    db::query($sql);
    echo "<script>location='about.php'</script>";
}

//add_services
if (isset($_POST['add_services'])) {
    $heading = $db->real_escape_string($_POST['heading']);
    $dcp =$db->real_escape_string($_POST['description']);

    $file = rand(1000, 100000) . "-" . $_FILES['image_services']['name'];
    $file_loc = $_FILES['image_services']['tmp_name'];
    $file_size = $_FILES['image_services']['size'];
    $file_type = $_FILES['image_services']['type'];
    $folder = "uploads/";
    $new_file_name = strtolower($file);
    $final_file = str_replace(' ', '-', $new_file_name);
    $a = move_uploaded_file($file_loc, $folder . $final_file);
    $query_insert = "INSERT INTO `services` (`heading`,`image`,`dcp`) VALUES ('$heading','$final_file','$dcp')";
    db::query($query_insert);
    echo "<script>location='services.php'</script>";
}

//update_services
if (isset($_POST['update_services'])) {
    $heading =$db->real_escape_string($_POST['heading']);
    $dcp =$db->real_escape_string($_POST['dcp']);

    $id=$_POST['id'];
    if ($_FILES['image']['name'] == "") {
        $sql = "UPDATE services SET heading='$heading',dcp='$dcp' WHERE id='$id'";
        db::query($sql);
    } else {
        $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
        $file_loc = $_FILES['image']['tmp_name'];
        $file_size = $_FILES['image']['size'];
        $file_type = $_FILES['image']['type'];
        $folder = "uploads/";
        $new_file_name = strtolower($file);
        $final_file = str_replace(' ', '-', $new_file_name);
        $a = move_uploaded_file($file_loc, $folder . $final_file);
        $sql = "UPDATE services SET heading='$heading',dcp='$dcp',image='$final_file' WHERE id='$id'";
        echo db::query($sql);
    }
    echo "<script>location='services.php'</script>";
}
//del_services
if (isset($_GET['delete_services'])) {
    $id = $_GET['delete_services'];
    $sql = "DELETE FROM services WHERE id='$id'";
    db::query($sql);
    echo "<script>location='services.php'</script>";
}