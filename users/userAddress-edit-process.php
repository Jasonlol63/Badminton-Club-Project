<?php
session_start();

$address=$_POST['address'];
$region=$_POST['city'];
$state=$_POST['state'];
$postcode=$_POST['postcode'];
$country=$_POST['country'];

include('connection.php');

// Initialize $updates array
$updates = [];

if (!empty($address) || !empty($region) || !empty($postcode) || !empty($country) || !empty($state)) {

    // Prepare the UPDATE query
    $update_query = "UPDATE users SET ";

    if (!empty($address)) {
        $updates[] = "address='$address'";
    }

    if (!empty($region)) {
        $updates[] = "region='$region'";
    }

    if (!empty($postcode)) {
        $updates[] = "postcode='$postcode'";
    }

    if (!empty($country)) {
        $updates[] = "country='$country'";
    }

    if (!empty($state)) {
        $updates[] = "state='$state'";
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
        window.location.href='userAddress-edit.php'</script>";
        exit();
    }
} else {
    // Handle case where no fields are updated
    echo "<script>alert('No fields updated!')
    window.location.href='userAddress-edit.php'</script>";
    exit();
}
?>