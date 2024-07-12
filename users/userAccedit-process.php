<?php
session_start();

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$oldpass=$_POST['currentPassword'];
$newpass=$_POST['newPassword'];
$conpass=$_POST['confirmPassword'];

if (!empty($name) || !empty($email) || !empty($phone) || (!empty($oldpass) && !empty($newpass) && !empty($conpass))) {
    include('connection.php');

    // Prepare the UPDATE query
    $update_query = "UPDATE users SET ";
    $updates = [];

    if (!empty($name)) {
        $updates[] = "name='$name'";
    }

    if (!empty($email) && $_SESSION['email'] !== $email) {
        $check_email_query = "SELECT * FROM users WHERE email='$email'";
        $check_email_result = mysqli_query($conn, $check_email_query);

        if (mysqli_num_rows($check_email_result) > 0) {
            echo "<script>alert('Email is already registered!')
            window.location.href='userAccedit.php'</script>";
            exit();
        }

        $updates[] = "email='$email'";
        $_SESSION['email'] = $email; // Update session email if changed
    }

    if (!empty($phone)) {
        $updates[] = "phoneNo='$phone'";
    }

    if (!empty($oldpass) && $oldpass != $newpass && $newpass == $conpass) {
        // Check if old password matches
        $check_pass_query = "SELECT * FROM users WHERE email='".$_SESSION['email']."' AND password='".$oldpass."'";
        $check_pass_result = mysqli_query($conn, $check_pass_query);

        if (mysqli_num_rows($check_pass_result) == 0) {
            echo "<script>alert('Invalid Password!')
            window.location.href='userAccedit.php'</script>";
            exit();
        }

        if ($newpass!=$conpass) {
            echo "<script>alert('Passwords do not match!')
            window.location.href='userAccedit.php'</script>";
            exit();
        }

        $updates[] = "password='$newpass'";
    }

    // Construct the SET part of the query
    $update_query .= implode(", ", $updates);

    // Add WHERE condition
    $update_query .= " WHERE email='".$_SESSION['email']."'";

    // Execute the UPDATE query
    $result = mysqli_query($conn, $update_query);

    if ($result) {
        echo "<script>alert('Profile updated successfully!')
        window.location.href='userAccount.php'</script>";
        exit();
    } else {
        echo "<script>alert('Failed to update profile!')
        window.location.href='userAccedit.php'</script>";
        exit();
    }
}

?>