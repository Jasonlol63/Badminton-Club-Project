<?php
session_start();
include('aheader.php');
?>

    <section class="container-information">
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
                <h6 style='text-decoration: none'><strong>ACCOUNT INFORMATION</strong></h6>
                <h6>Contact Information:</h6>
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
        <div class="remove-underline">
            <a href="userAccedit.php">Edit</a>
            <a href="userAccdelete.php">Delete</a>
        </div>
        <div class="edit-address">
            <?php
            if (isset($_SESSION['loggin'])) {
                $address = $_SESSION['address'];
                $country = $_SESSION['country'];
                $state = $_SESSION['state'];
                $region = $_SESSION['region'];
                $postcode = $_SESSION['postcode'];
                $phone = $_SESSION['phone'];
            ?>
                <?php // Display user details
                ?>
                <h5 style='text-decoration: none'>User Address</h5><br>
                <p>Address : <?php echo "$address , $postcode, $region , $state" ?><br>
                <p>Country : <?php echo $country; ?> <br>
                <p>Phone : <?php echo $phone; ?> <br>
                <?php
            } else {
                // If user is not logged in, redirect to login page
                header("Location: login.php");
                exit();
            }
                ?>
        </div>
        <div class="edit-address">
            <a href="userAddress-edit.php">Edit address</a>
            <a href="userAddress.php">Add New address</a>
        </div>
        </div>
    </section>

</body>

</html>