<?php
session_start();

$email = $_SESSION['email'];
$address = $_POST['address'];
$country = $_POST['country'];
$region = $_POST['region'];
$state = $_POST['state'];
$postcode = $_POST['postcode'];

if (isset($address) && isset($country) && isset($region) && isset($state) && isset($postcode)) {

    $address = $_POST['address'];
    $country = $_POST['country'];
    $region = $_POST['region'];
    $state = $_POST['state'];
    $postcode = $_POST['postcode'];
}

if ($_SESSION['true']==false) {

    include('connection.php');

    if (preg_match('/[a-zA-Z]/', $postcode)) {
        echo "<script>alert('Invalid postcode')
        window.location.href='userAddress.php'</script>";
        exit();
    }


    $ssql = "SELECT * FROM users WHERE email='" . $email . "'";
    $rresult = mysqli_query($conn, $ssql);

    if (mysqli_num_rows($rresult) > 0) {
        $sssql = "UPDATE users SET address='" . $address . "', country='" . $country . "', state='" . $state . "', region='" . $region . "', postcode='" . $postcode . "' WHERE email='" . $email . "'";
        $rrresult = mysqli_query($conn, $sssql);

        if (($rrresult)) {
            echo "<script>alert('Address Sign Up Successful ! ! !')
    window.location.href='../index2.php'</script>";
        } else {
            echo "<script>alert('Missing Address ! ! ! ')
    window.location.href='userAddress.php'</script>";
        }
    }
} else {
    echo "<script>alert('Please Complete Form')
    window.location.href='userAddress.php'</script>";
}
