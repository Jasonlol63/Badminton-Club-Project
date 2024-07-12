<?php
session_start();
include('connection.php'); // Include database connection script

if (isset($_POST['event_id'])) {
    $event_id = $_POST['event_id'];

    // Use prepared statement to delete the event
    $sql = "DELETE FROM event WHERE event_id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $event_id);
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        echo "<script>alert('Event deleted successfully!');
              window.location.href='event_list.php';</script>";
        exit();
    } else {
        echo "<script>alert('Failed to delete event!');
              window.location.href='event_list.php';</script>";
        exit();
    }
} else {
    // Handle case where event_id is not set in POST data
    echo "<script>alert('Event ID not provided for deletion!');
          window.location.href='event_list.php';</script>";
    exit();
}
