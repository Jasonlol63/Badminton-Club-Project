<?php
session_start();
include('connection.php');

if (isset($_GET['name'])) {
    $name = $_GET['name'];
    $sql = "DELETE FROM users WHERE name = ?";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "s", $name);
        mysqli_stmt_execute($stmt);

        if (mysqli_stmt_affected_rows($stmt) > 0) {
            echo "<script>alert('User details deleted successfully!');
                  window.location.href='user_list.php';</script>";
            exit();
        } else {
            echo "<script>alert('Failed to delete user details!');
                  window.location.href='user_list.php';</script>";
            exit();
        }
    } else {
        echo "<script>alert('Failed to prepare the SQL query!');
              window.location.href='user_list.php';</script>";
        exit();
    }
} else {
    echo "<script>alert('Invalid deletion request!');
          window.location.href='user_list.php';</script>";
    exit();
}
