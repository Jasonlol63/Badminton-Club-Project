<?php
session_start();

$email = $_POST['name'];
$password = $_POST['password'];

//ensure the email and password not empty and return true or false
if (isset($_POST['name']) && isset($_POST['password'])) {
    if (!empty($_POST['name']) && !empty($_POST['password'])) {
        $email = $_POST['name'];
        $password = $_POST['password'];
    }
}

if (!empty($email) && !empty($password)) {

    include('connection.php');

    // Prepared statement to prevent SQL injection
    $sql = "SELECT * FROM users WHERE email='" . $email . "' AND password='" . $password . "'";

    $result = mysqli_query($conn, $sql);


    if (mysqli_num_rows($result)) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['loggin'] = true;
        $_SESSION['email'] = $row['email'];
        $_SESSION['name'] = $row['name']; // Assuming name is stored in the database
        $_SESSION['phone'] = $row['phoneNo']; // Assuming phone is stored in the database
        $_SESSION['address'] = $row['address'];
        $_SESSION['country'] = $row['country'];
        $_SESSION['state'] = $row['state'];
        $_SESSION['region'] = $row['region'];
        $_SESSION['postcode'] = $row['postcode'];

        echo "<script>alert('Login Successful ! ! !')
        window.location.href='../index2.php'</script>";
        exit();
    } else {
        echo "<script>alert('Invalid Password or Email')
        window.location.href='login.php'</script>";
    }
} else {
    echo "<script>alert('Please Complete Login Form')
    window.location.href='login.php'</script>";
}
