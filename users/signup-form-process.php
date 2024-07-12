<?php
session_start();

$name = $_POST['username'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['compassword'];
$gender = $_POST['gender'];
$typegender = array('M', 'F');

if (isset($name) && isset($phone) && isset($email) && isset($password) && isset($cpassword) && isset($gender)) {
    $name = $_POST['username'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['compassword'];
    $gender = $_POST['gender'];
    $typegender = array('M', 'F');
}

if (!empty($name) && !empty($phone) && !empty($email) && !empty($password) && !empty($cpassword) && !empty($gender)) {

    include('connection.php');

    if (!preg_match('/[a-zA-Z]/', $name) && strlen($name >= 30)) {
        echo "<script>alert('Invalid Username')
        window.location.href='signup-form.php'</script>";
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE name='" . $name . "'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo "<script>alert('Username already Register ! ! !')
            window.location.href='signup-form.php'</script>";
            exit();
        }
    }

    if (preg_match('/^\d{9,13}$/', $phone)) {
        $ssql = "SELECT * FROM users WHERE phoneNo='" . $phone . "'";
        $rresult = mysqli_query($conn, $ssql);

        if (mysqli_num_rows($rresult) > 0) {
            echo "<script>alert('Phone Number already Register ! ! !')
            window.location.href='signup-form.php'</script>";
            exit();
        } else {
        }
    } else if (preg_match('/[a-zA-Z]/', $phone)) {
        echo "<script>alert('Invalid Phone Number')
        window.location.href='signup-form.php'</script>";
        exit();
    }

    if (strpos($email, '@gmail.com') !== false) {
        $sssql = "SELECT * FROM users WHERE email='" . $email . "'";
        $rrresult = mysqli_query($conn, $sssql);

        if (mysqli_num_rows($rrresult) > 0) {
            echo "<script>alert('Email already Register ! ! !')
            window.location.href='signup-form.php'</script>";
            exit();
        } else {
        }
    } else {
        echo "<script>alert('Invalid Email Form')
        window.location.href='signup-form.php'</script>";
        exit();
    }

    if ($password !== $cpassword) {
        echo "<script>alert('Password Inconfirmly ! ! !')
        window.location.href='signup-form.php'</script>";
        exit();
    }

    if (!in_array($gender, $typegender)) {
        echo "<script>alert('Invalid Gender Value')
        window.location.href='signup-form.php'</script>";
        exit();
    }

    $ssssql = "INSERT INTO users (name, phoneNo, email, password, gender)
    VALUES('" . $name . "', '" . $phone . "', '" . $email . "', '" . $password . "', '" . $gender . "')";

    $rrrresult = mysqli_query($conn, $ssssql);

    if (($rrrresult) > 0) {
        echo "<script>alert('Sign Up Successful ! ! !')
        window.location.href='login.php'</script>";
    } else {
        echo "<script>alert('Sign Up Fail ! ! ! ')
        window.location.href='signup-form.php'</script>";
    }
} else {
    echo "<script>alert('Please Complete Sign Up Form')
    window.location.href='signup-form.php'</script>";
}
