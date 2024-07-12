<?php
session_start();

include('connection.php');

if (isset($_POST['prod_id'])) {
    $sql = "DELETE FROM product WHERE prod_id ='".$_POST['prod_id']."'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>alert('Profile Delete Successful');
              window.location.href='delete_shopping.php';</script>";
        exit(); 
    } else {
        echo "<script>alert('Failed to Delete User Details!');
              window.location.href='delete_shopping.php';</script>";
        exit(); 
    }
}