<?php
$conn = mysqli_connect("localhost","root","","rapid_rescue");
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $del = "DELETE FROM `add_medical_history` WHERE amh_id = '$id'";
        mysqli_query($conn,$del);
        header("location:view_medical_history.php");
    }
?>