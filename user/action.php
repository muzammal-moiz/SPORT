<?php
session_start();
require_once("database.php");
$db = db::open();
$datee = date("d-m-Y");
// all insertion code start
//logout
if (isset($_GET['logout'])) {
    unset($_SESSION['email']);
    echo "<script>location='../index.php'</script>";
}

// update_logo
if (isset($_POST['update_logo'])) {
    $dcp = $db->real_escape_string($_POST['dcp']);
    $id = $db->real_escape_string($_POST['id']);

    if ($_FILES['image']['name'] == "") {
        $sql = "UPDATE logo SET dcp='$dcp'";
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
        $sql = "UPDATE logo SET dcp='$dcp',image='$final_file' ";
        db::query($sql);
    }
    echo "<script>location='logo.php'</script>";
}

// update_banner
if (isset($_POST['update_banner'])) {
    $heading = $db->real_escape_string($_POST['heading']);
    $title = $db->real_escape_string($_POST['title']);
    $dcp = $db->real_escape_string($_POST['dcp']);
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



//add_about
if (isset($_POST['add_about'])) {
    $heading = $db->real_escape_string($_POST['heading']);
    $dcp = $db->real_escape_string($_POST['dcp']);

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
    $dcp = $db->real_escape_string($_POST['dcp']);

    $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
    $file_loc = $_FILES['image']['tmp_name'];
    $file_size = $_FILES['image']['size'];
    $file_type = $_FILES['image']['type'];
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
    $heading = $db->real_escape_string($_POST['heading']);
    $dcp = $db->real_escape_string($_POST['dcp']);

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
if (isset($_GET['del_services'])) {
    $id = $_GET['del_services'];
    $sql = "DELETE FROM services WHERE id='$id'";
    db::query($sql);
    echo "<script>location='services.php'</script>";
}

//add_testimonials
if (isset($_POST['add_testimonials'])) {
    $name = $db->real_escape_string($_POST['name']);
    $dcp = $db->real_escape_string($_POST['dcp']);
    $designation = $db->real_escape_string($_POST['designation']);

    $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
    $file_loc = $_FILES['image']['tmp_name'];
    $file_size = $_FILES['image']['size'];
    $file_type = $_FILES['image']['type'];
    $folder = "uploads/";
    $new_file_name = strtolower($file);
    $final_file = str_replace(' ', '-', $new_file_name);
    $a = move_uploaded_file($file_loc, $folder . $final_file);
    $query_insert = "INSERT INTO `testimonials` (`name`,`image`,`dcp`,`designation`) VALUES ('$name','$final_file','$dcp','$designation')";
    db::query($query_insert);
    echo "<script>location='testimonials.php'</script>";
}

//update_testimonials
if (isset($_POST['update_testimonials'])) {
    $name = $db->real_escape_string($_POST['name']);
    $dcp = $db->real_escape_string($_POST['dcp']);
    $designation = $db->real_escape_string($_POST['designation']);

    $id=$_POST['id'];
    if ($_FILES['image']['name'] == "") {
        $sql = "UPDATE testimonials SET name='$name',dcp='$dcp',designation='$designation' WHERE id='$id'";
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
        $sql = "UPDATE testimonials SET name='$name',dcp='$dcp',image='$final_file',designation='$designation' WHERE id='$id'";
        echo db::query($sql);
    }
    echo "<script>location='testimonials.php'</script>";
}
//del_testimonials
if (isset($_GET['del_testimonials'])) {
    $id = $_GET['del_testimonials'];
    $sql = "DELETE FROM testimonials WHERE id='$id'";
    db::query($sql);
    echo "<script>location='testimonials.php'</script>";
}

//add_subscription
if (isset($_POST['add_subscription'])) {
    $heading = $db->real_escape_string($_POST['heading']);
    $dcp = $db->real_escape_string($_POST['dcp']);
    $price = $db->real_escape_string($_POST['price']);
    $button_name = $db->real_escape_string($_POST['button_name']);

    
    $query_insert = "INSERT INTO `subscription` (`heading`,`dcp`,`price`,`button_name`) VALUES ('$heading','$dcp','$price','$button_name')";
    db::query($query_insert);
    echo "<script>location='subscription.php'</script>";
}

//update_subscription
if (isset($_POST['update_subscription'])) {
    $heading = $db->real_escape_string($_POST['heading']);
    $dcp = $db->real_escape_string($_POST['dcp']);
    $price = $db->real_escape_string($_POST['price']);
    $button_name = $db->real_escape_string($_POST['button_name']);

    $id=$_POST['id'];
    $sql = "UPDATE subscription SET heading='$heading',dcp='$dcp',price='$price',button_name='$button_name' WHERE id='$id'";
    db::query($sql);

    echo "<script>location='subscription.php'</script>";
}
//del_subscription
if (isset($_GET['del_subscription'])) {
    $id = $_GET['del_subscription'];
    $sql = "DELETE FROM subscription WHERE id='$id'";
    db::query($sql);
    echo "<script>location='subscription.php'</script>";
}


//add_contact
if (isset($_POST['add_contact'])) {
    $f_name = $db->real_escape_string($_POST['f_name']);
    $l_name = $db->real_escape_string($_POST['l_name']);
    $email = $db->real_escape_string($_POST['email']);
    $phone = $db->real_escape_string($_POST['phone']);
    $message = $db->real_escape_string($_POST['message']);

    $query_insert = "INSERT INTO `contact` (`f_name`,`l_name`,`email`,`phone`,`message`) VALUES ('$f_name','$l_name','$email','$phone','$message')";
    db::query($query_insert);
    echo "<script>location='../contact.php'</script>";
}

//del_contact
if (isset($_GET['del_contact'])) {
    $id = $_GET['del_contact'];
    $sql = "DELETE FROM contact WHERE id='$id'";
    db::query($sql);
    echo "<script>location='contact.php'</script>";
}
//add_newslatter
if (isset($_POST['add_newslatter'])) {
    $email = $db->real_escape_string($_POST['email']);

    $query_insert = "INSERT INTO `newsletter` (`email`) VALUES ('$email')";
    db::query($query_insert);
    echo "<script>location='../index.php'</script>";
}
//del_newsletter
if (isset($_GET['del_newsletter'])) {
    $id = $_GET['del_newsletter'];
    $sql = "DELETE FROM newsletter WHERE id='$id'";
    db::query($sql);
    echo "<script>location='newsletter.php'</script>";
}

//sign_up
if (isset($_POST['sign_up'])) {
    $name = $db->real_escape_string($_POST['name']);
    $email = $db->real_escape_string($_POST['email']);
    $password = $db->real_escape_string($_POST['password']);
    $date = $db->real_escape_string($_POST['date']);
    $sub_id = $db->real_escape_string($_POST['sub_id']);
    

    $query_insert = "INSERT INTO `user` (`name`,`email`,`password`,`date`) VALUES ('$name','$email','$password','$date')";
    db::query($query_insert);
    $query_insert = "INSERT INTO `subscription_user` (`email`,`subscription_id`,`date`) VALUES ('$email','$sub_id','$date')";
    db::query($query_insert);

    echo "<script>location='../subscription.php'</script>";
}

//add_tips
if (isset($_POST['add_tips'])) {
    $dcp = $db->real_escape_string($_POST['dcp']);

    $query_insert = "INSERT INTO `tips` (`dcp`) VALUES ('$dcp')";
    db::query($query_insert);
    echo "<script>location='tips.php'</script>";
}

//update_tips
if (isset($_POST['update_tips'])) {
    $dcp = $db->real_escape_string($_POST['dcp']);

    $id=$_POST['id'];
    $sql = "UPDATE tips SET dcp='$dcp' WHERE id='$id'";
    db::query($sql);
    echo "<script>location='tips.php'</script>";
}
//del_tips
if (isset($_GET['del_tips'])) {
    $id = $_GET['del_tips'];
    $sql = "DELETE FROM tips WHERE id='$id'";
    db::query($sql);
    echo "<script>location='tips.php'</script>";
}

// update_user
if (isset($_POST['update_user'])) {
    $name = $db->real_escape_string($_POST['name']);
    $email = $db->real_escape_string($_POST['email']);
    $password = $db->real_escape_string($_POST['password']);
    $date = $db->real_escape_string($_POST['date']);
    $id = $db->real_escape_string($_POST['id']);

    $sql = "UPDATE user SET name='$name',email='$email',password='$password',date='$date'";
    db::query($sql); 
    echo "<script>location='profile.php'</script>";
}