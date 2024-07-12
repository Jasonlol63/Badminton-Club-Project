<?php
session_start();

$id = $_POST['ID'];
$password = $_POST['password'];

//ensure is set in the post 
if (isset($_POST['ID']) && isset($_POST['password'])) {
    //ensure is not empty
    if (!empty($_POST['ID']) && !empty($_POST['password'])) {
        $id = $_POST['ID'];
        $password = $_POST['password'];
    }
}

if (!empty($id) && !empty($password)) {

    include('connection.php');

    // Prepared statement to prevent SQL injection
    $sql = "SELECT * FROM admin WHERE adminID='" . $id . "' AND password='" . $password . "'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result)) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['adminloggin'] = TRUE;
        $_SESSION['adminid'] = $row['AdminID'];
        $_SESSION['adminpassword'] = $row['password'];

        echo "<script>alert('Login Successful')
        window.location.href='admin.php'</script>";
        //make sure no another output is carrying out
        exit();
    } else {
        //Password or Login incorrect
        echo "<script>alert('Invalid Password or ID');
        window.location.href='login.php'</script>";
    }
} else {
    //didn't complete file
    echo "<script>alert('Please Complete Login Form');
    window.location.href='login.php'</script>";
}
