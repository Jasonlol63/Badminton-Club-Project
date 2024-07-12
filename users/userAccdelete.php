<?php
session_start();

include('connection.php');
$name = $_SESSION['name'];

// Check if form is submitted and confirmation is received
if (isset($_POST['confirm_delete'])) {
    $sql = "DELETE FROM users WHERE name ='$name'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>alert('Details Delete Successful');
              window.location.href='../index.php';</script>";
        exit(); // Stop further execution after redirect
    } else {
        echo "<script>alert('Failed to Delete User Details!');
              window.location.href='userAccount.php';</script>";
        exit(); // Stop further execution after redirect
    }
}
?>
<script>
    function confirmation() {
        var x = confirm(" Sure delete your account?");
        if (x) {
            document.getElementById('deleteForm').submit();
        } else {
            window.location.href = 'userAccount.php';
        }
    }
</script>

<link href="userAccdelete.css" rel="stylesheet">
<div class="container-text">
    <?php
    // Check if the user is logged in
    // Retrieve user details from session
    if (isset($_SESSION['loggin'])) {
        $email = $_SESSION['email'];
        $name = $_SESSION['name'];
        $phone = $_SESSION['phone'];
        // Display user details
    ?>
        <h2><strong>ACCOUNT INFORMATION</strong></h2>
        <h3>Contact Information:</h3>
        <p>Name : <?php echo $name; ?> <br>
        <p>Email : <?php echo $email; ?> <br>
        <p>Phone : <?php echo $phone; ?> <br>
        <?php
    } else {
        // If user is not logged in, redirect to login page
        header("Location: login.php");
        exit();
    }
        ?>
</div>

<form class="deleteForm" action="" method="post">
    <!-- Add any necessary form fields here -->
    <button type="button" onclick="confirmation()">Delete Account</button>
    <input type="hidden" name="confirm_delete" value="1">
    <a style="text-decoration:underline" href="userAccount.php">Cancel</a>
</form>