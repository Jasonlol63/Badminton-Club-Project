<?php
session_start();

include('connection.php');

$id = $_POST['eventID'];
$name = $_POST['eventName'];
$price = $_POST['eventPrice'];
$date = $_POST['eventdate'];
$location = $_POST['eventlocation'];
$time = $_POST['eventtime'];
$time_end = $_POST['event_time_end'];
$description = $_POST['eventDescription'];

if (!empty($id) || !empty($name) || !empty($price) || !empty($date) || !empty($location) || !empty($time) || !empty($time_end) || !empty($description)) {

    // Prepare the UPDATE query
    $update_query = "UPDATE event SET ";
    $updates = [];

    if (!empty($name)) {
        $updates[] = "eventname='$name'";
    }

    if (!empty($date)) {
        $updates[] = "date='$date'";
    }

    if (!empty($time_end)) {
        $updates[] = "time_end='$time_end'";
    }

    if (!empty($time)) {
        $updates[] = "time='$time'";
    }

    if (!empty($location)) {
        $updates[] = "location='$location'";
    }

    if (!empty($price)) {
        $updates[] = "price='$price'";
    }

    if (!empty($description)) {
        $updates[] = "context='$description'";
    }

    // Construct the SET part of the query
    $update_query .= implode(", ", $updates);

    // Add WHERE condition
    $update_query .= " WHERE event_id='" . $id . "'";

    // Execute the UPDATE query
    $result = mysqli_query($conn, $update_query);

    if ($result) {
        echo "<script>alert('Profile updated successfully!')
        window.location.href='event_list.php'</script>";
        exit();
    } else {
        echo "<script>alert('Failed to update profile!')
        window.location.href='evdit_event.php'</script>";
        exit();
    }
}
