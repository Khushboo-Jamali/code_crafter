<?php


// login code
session_start();
include "config.php";

// admin profile update
if (isset($_POST['up_admin'])) {
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $add = $_POST['address'];
    $img_name = $_FILES['img']['name'];
    $tmp_name = $_FILES['img']['tmp_name'];
    $folder = "images/" . $img_name;
    if (move_uploaded_file($tmp_name, $folder)) {
        $sql = "UPDATE `users` SET `firstname`='$fname',`lastname`='$lname',`email`='$email',`phonenumber`='$phone', `address`='$add' ,`pic`='$folder' WHERE user_id ='$id'";
        $qurey = mysqli_query($conn, $sql);
        if ($qurey) {
            header("location:user_profile.php");
        }
    } else {
        $sql = "UPDATE `users` SET `firstname`='$fname',`lastname`='$lname',`email`='$email',`phonenumber`='$phone', `address`='$add'  WHERE user_id ='$id'";
        $qurey = mysqli_query($conn, $sql);
        header("location:user_profile.php");
    }
}


// add emt
if (isset($_POST['add_emt'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $certification = $_POST['certification'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $sql = "INSERT INTO `emt`( `first_name`, `last_name`, `certification`, `phonenumber`, `email`) 
    VALUES ('$fname','$lname','$certification','$phone','$email')";

    $res = mysqli_query($conn, $sql);
    if ($res) {
        header('location:add_emt.php?msg=Emt added successfully');
    } else {
        header('location:add_emt.php?msg=Emt not added');
    }
}

// add ambulance
if (isset($_POST['addambu'])) {
    $vnum = $_POST['vnumber'];
    $ell = $_POST['elevel'];

    $sql = "INSERT INTO `ambulances`( `vehicle_number`) 
    VALUES ('$vnum')";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        header('location:add_ambulance.php?msg=ambulance added successfully');
    } else {
        header('location:add_ambulances.php?msg=ambulance not added');
    }
}

// add driver
if (isset($_POST['driver'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $sql = "INSERT INTO `drivers`( `first_name`, `last_name`, `phonenumber`)
     VALUES ('$fname','$lname','$phone')";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        header('location:add_driver.php?msg=driver added successfully');
    } else {
        header('location:add_driver.php?msg=driver not added');
    }
}

// active and deactive driver
if (isset($_GET['Did'])) {
    $id = $_GET['Did'];
    $status = $_GET['status'];
    if ($status == "Active") {
        $driver_up = "UPDATE drivers SET STATUS = 'Deactive' WHERE driver_id = '$id'";
    } else {
        $driver_up = "UPDATE drivers SET STATUS = 'Active' WHERE driver_id = '$id'";
    }
    if (mysqli_query($conn, $driver_up) == true) {
        header("location:view_driver.php?msg=status update successfully");
    } else {
        header("location:view_driver.php?msg=status not update successfully");
    }
}
// update driver
if (isset($_POST['up_driver'])) {
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $sql = "UPDATE `drivers`  SET `first_name`='$fname',`last_name`='$lname',`phonenumber`='$phone' WHERE driver_id ='$id'";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        header("location:view_driver.php");
    }
}

// delete ambulance like active deactive
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $status = $_GET['stt'];
    if ($status == "Available") {
        $ambulance = "UPDATE ambulances SET current_status = 'Unavailable' WHERE ambulance_id = '$id'";
    } else {
        $ambulance = "UPDATE ambulances SET current_status= 'Available' WHERE ambulance_id = '$id'";
    }
    if (mysqli_query($conn, $ambulance) == true) {
        header("location:view_ambulance.php?msg=status update successfully");
    } else {
        header("location:view_ambulance.php?msg=status not update successfully");
    }
}

// update ambulance
if (isset($_POST['up_ambu'])) {
    $id = $_POST['id'];
    $ambul = $_POST['vnumber'];
    $sql = "UPDATE `ambulances` SET `vehicle_number`='$ambul'   WHERE ambulamce_id ='$id'";
    mysqli_query($conn, $sql);

    header("location:view_ambulance.php");
}


// delete ambulance like active deactive
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $status = $_GET['status'];
    if ($status == "Completed") {
        $requests = "UPDATE emergencyrequests SET status = 'Uncompleted' WHERE request_id = '$id'";
    } else {
        $requests = "UPDATE emergencyrequests SET status= 'Completed' WHERE  request_id = '$id'";
    }
    if (mysqli_query($conn,  $requests) == true) {
        header("location:view_request.php?msg=status update successfully");
    } else {
        header("location:view_request.php?msg=status not update successfully");
    }
}


//delet emt
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $del = "DELETE FROM `emt` WHERE emt_id = '$id'";
    $res = mysqli_query($conn, $del);
    if ($res) {
        header("location:view_emt.php");
    }
}

// update emt
if (isset($_POST['up_emt'])) {
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $certification = $_POST['certification'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $sql = "UPDATE `emt`  SET `first_name`='$fname',`last_name`='$lname',`certification`='$certification' , `phonenumber`='$phone' , `email`='$email' WHERE emt_id ='$id'";
    mysqli_query($conn, $sql);

    header("location:view_emt.php");
}
