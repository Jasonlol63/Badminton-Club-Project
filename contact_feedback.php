<?php
session_start();

$ctname = trim($_POST['username']);
$ctemail = trim($_POST['useremail']);
$msg = trim($_POST['message']);

if (!empty($ctname) && !empty($ctemail) && !empty($msg)) {

    include('connection.php');

    $insert_query = "INSERT INTO feedback (`name`, email, `description`) VALUES ('" . $ctname . "','" . $ctemail . "', '" . $msg . "') ";

    $result = mysqli_query($conn, $insert_query);

    if ($result) {
        echo "<script>alert('Give Feedback successfully!')
        window.location.href='index2.php'</script>";
        exit();
    } else {
        echo "<script>alert('Failed to Give Feedback!')
        window.location.href='contact.php'</script>";
        exit();
    }
} else {
    echo "<script>alert('Please Complete The Feedback!')
        window.location.href='contact.php'</script>";
    exit();
}
