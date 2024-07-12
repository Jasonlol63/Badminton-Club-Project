<?php
session_start();
include('connection.php');

if (isset($_POST['event_id'])) {
    $event_id = $_POST['event_id'];


    $sql = "DELETE FROM event WHERE event_id = ?";


    $stmt = mysqli_prepare($conn, $sql);


    mysqli_stmt_bind_param($stmt, 's', $event_id);


    if (mysqli_stmt_execute($stmt)) {
        echo "<script>alert('Event deleted successfully!');
              window.location.href='event_list.php';</script>";
        exit();
    } else {
        echo "<script>alert('Failed to delete event!');
              window.location.href='event_list.php';</script>";
        exit();
    }


    mysqli_stmt_close($stmt);
} else {
    echo "<script>alert('Invalid deletion request!');
          window.location.href='event_list.php';</script>";
    exit();
}
