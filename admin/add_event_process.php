<?php
session_start();

$id = $_POST['eventID'];
$name = $_POST['eventName'];
$price = $_POST['eventPrice'];
$date = $_POST['eventdate'];
$location = $_POST['eventlocation'];
$time = $_POST['eventtime'];
$time_end = $_POST['event_time_end'];
$description = $_POST['eventDescription'];

if (!empty($id) && !empty($name) && !empty($price) && !empty($date) && !empty($time) && !empty($time_end) && !empty($description)) {

    include('connection.php');

    $targetDirectory = "img/";
    if (!file_exists($targetDirectory)) {
        mkdir($targetDirectory, 0777, true); // Create directory recursively
    }
    $targetFile = $targetDirectory . basename($_FILES["eventImage"]["name"]);

    if (move_uploaded_file($_FILES["eventImage"]["tmp_name"], $targetFile)) {
        echo "The file " . basename($_FILES["eventImage"]["name"]) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

    $insert_query = "INSERT INTO event (event_id,eventname,date,time,time_end,location,price,context,image) VALUES (?,?,?,?,?,?,?,?,?) ";

    $insert = mysqli_prepare($conn, $insert_query);

    mysqli_stmt_bind_param($insert, "ssssssdss", $id, $name, $date, $time, $time_end, $location, $price, $description, $targetFile);

    $result = mysqli_stmt_execute($insert);


    if ($result) {
        echo "<script>alert('Profile updated successfully!')
        window.location.href='add_event.php'</script>";
        exit();
    } else {
        echo "<script>alert('Failed to update profile!')
        window.location.href='add_event.php'</script>";
        exit();
    }

    mysqli_stmt_close($insert);
    mysqli_close($conn);
} else {
    echo "<script>alert('Please Complete Profile!')
        window.location.href='add_event.php'</script>";
    exit();
}
