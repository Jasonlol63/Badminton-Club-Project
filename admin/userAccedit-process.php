<?php
session_start();

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$oldpass = $_POST['currentPassword'];
$newpass = $_POST['newPassword'];
$conpass = $_POST['confirmPassword'];

if (!empty($name) || !empty($email) || !empty($phone) || (!empty($oldpass) && !empty($newpass) && !empty($conpass))) {
    include('connection.php');

    $update_query = "UPDATE users SET ";
    $updates = [];

    if (!empty($name)) {
        $updates[] = "name='" . mysqli_real_escape_string($conn, $name) . "'";
    }

    if (!empty($email) && $_SESSION['email'] !== $email) {
        $check_email_query = "SELECT * FROM users WHERE email='" . mysqli_real_escape_string($conn, $email) . "'";
        $check_email_result = mysqli_query($conn, $check_email_query);

        if (mysqli_num_rows($check_email_result) > 0) {
            echo "<script>alert('Email is already registered!')
            window.location.href='userAccedit.php'</script>";
            exit();
        }

        $updates[] = "email='" . mysqli_real_escape_string($conn, $email) . "'";
        $_SESSION['email'] = $email;
    }

    if (!empty($phone)) {
        $updates[] = "phoneNo='" . mysqli_real_escape_string($conn, $phone) . "'";
    }

    if (!empty($oldpass) && $oldpass != $newpass && $newpass == $conpass) {
        $check_pass_query = "SELECT * FROM users WHERE email='" . mysqli_real_escape_string($conn, $_SESSION['email']) . "' AND password='" . mysqli_real_escape_string($conn, $oldpass) . "'";
        $check_pass_result = mysqli_query($conn, $check_pass_query);

        if (mysqli_num_rows($check_pass_result) == 0) {
            echo "<script>alert('Invalid Password!')
            window.location.href='userAccedit.php'</script>";
            exit();
        }

        $updates[] = "password='" . mysqli_real_escape_string($conn, $newpass) . "'";
    } elseif (!empty($newpass) && !empty($conpass)) {
        echo "<script>alert('Passwords do not match!')
        window.location.href='userAccedit.php'</script>";
        exit();
    }

    if (empty($updates)) {
        echo "<script>alert('No changes to update!')
        window.location.href='userAccedit.php'</script>";
        exit();
    }

    $update_query .= implode(", ", $updates);

    $update_query .= " WHERE email='" . mysqli_real_escape_string($conn, $_SESSION['email']) . "'";

    $result = mysqli_query($conn, $update_query);

    if ($result) {
        if (mysqli_affected_rows($conn) > 0) {
            echo "<script>alert('Profile updated successfully!')
            window.location.href='user_list.php'</script>";
        } else {
            echo "<script>alert('No changes were made!')
            window.location.href='userAccedit.php'</script>";
        }
    } else {
        echo "<script>alert('Failed to update profile!')
        window.location.href='userAccedit.php'</script>";
    }
} else {
    echo "<script>alert('Please complete profile!')
    window.location.href='userAccedit.php'</script>";
}
