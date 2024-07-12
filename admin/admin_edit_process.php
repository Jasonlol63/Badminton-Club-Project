<?php
session_start();

// Check if session variable 'adminid' is set
if (!isset($_SESSION['adminid'])) {
    echo "<script>alert('Session expired. Please log in again.'); window.location.href='login.php';</script>";
    exit();
}

ini_set('session.gc_maxlifetime', 1800);
ini_set('session.cookie_lifetime', 1800);


$oldpass = $_POST['currentPassword'];
$newpass = $_POST['newPassword'];
$conpass = $_POST['confirmPassword'];

if (!empty($oldpass) && !empty($newpass) && !empty($conpass)) {
    if ($newpass !== $conpass) {
        echo "<script>alert('Passwords do not match!'); window.location.href='admin_edit.php';</script>";
        exit();
    }

    include('connection.php');

    // Get admin ID from session
    $admin_id = mysqli_real_escape_string($conn, $_SESSION['adminid']);

    // Fetch the stored hashed password from the database
    $check_pass_query = "SELECT password FROM admin WHERE AdminID='$admin_id'";
    $check_pass_result = mysqli_query($conn, $check_pass_query);

    if ($check_pass_result && mysqli_num_rows($check_pass_result) > 0) {
        $row = mysqli_fetch_assoc($check_pass_result);
        $hashed_password = $row['password'];

        // Debugging: Output fetched password hash
        error_log("Stored hashed password: " . $hashed_password);

        // Verify the current password
        if (password_verify($oldpass, $hashed_password)) {
            // Hash the new password
            $new_hashed_password = password_hash($newpass, PASSWORD_DEFAULT);

            // Update the password in the database
            $update_query = "UPDATE admin SET password='" . mysqli_real_escape_string($conn, $new_hashed_password) . "' WHERE AdminID='$admin_id'";
            $result = mysqli_query($conn, $update_query);

            if ($result) {
                echo "<script>alert('Profile updated successfully!'); window.location.href='admin_profile.php';</script>";
                exit();
            } else {
                error_log("Database update error: " . mysqli_error($conn)); // Log the error
                echo "<script>alert('Failed to update profile!'); window.location.href='admin_edit.php';</script>";
                exit();
            }
        } else {
            error_log("Password verification failed for user $admin_id"); // Log the error
            echo "<script>alert('Invalid Password!'); window.location.href='admin_edit.php';</script>";
            exit();
        }
    } else {
        error_log("No user found with AdminID: $admin_id");
        echo "<script>alert('Invalid Password!'); window.location.href='admin_edit.php';</script>";
        exit();
    }
} else {
    echo "<script>alert('Please complete all fields!'); window.location.href='admin_edit.php';</script>";
    exit();
}
