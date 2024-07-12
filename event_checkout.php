<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="users/userAccount.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
            color: #212529;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            background-color: #343a40;
            color: #ffffff;
            padding: 10px 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
            color: #ffffff;
            text-decoration: none;
        }

        .navbar-nav .nav-link {
            color: #ffffff;
            margin-right: 10px;
        }

        .sidebar {
            background-color: #ffffff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .sidebar h4 {
            margin-bottom: 20px;
            font-size: 1.2rem;
            color: #212529;
        }

        .sidebar a {
            display: block;
            text-decoration: none;
            color: #212529;
            padding: 10px 0;
            border-bottom: 1px solid #dee2e6;
        }

        .sidebar a:hover {
            background-color: #f8f9fa;
        }

        .content {
            background-color: #ffffff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <header>
        <div class="container">
            <nav class="navbar">
                <a class="navbar-brand" href="index2.php">Badminton Inspired All</a>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="users/userAccount.php">Welcome, <?php echo $_SESSION['name']; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="users/userAccount.php">View Account</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Logout</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="sidebar">
                    <h4>ACCOUNT NAVIGATION</h4>
                    <a href="users/userAccount.php">MY ACCOUNT</a>
                    <a href="users/order_his.php">ORDER HISTORY</a>
                    <a href="event_checkout.php">EVENTS HISTORY</a>
                    <a href="index2.php">BACK</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="content">
                    <h2>Welcome, <?php echo $_SESSION['name']; ?>!</h2>
                    <?php
                    include('connection.php'); // Include database connection script

                    if (isset($_POST['checkoutButton'])) {
                        if (isset($_SESSION['eventid'])) {
                            $event_id = $_SESSION['eventid'];
                            $eventname = $_SESSION['eventname'];
                            $qty = $_SESSION['qty'];
                            $price = $_SESSION['price'];
                            $buyqty = isset($_POST['qty']) ? $_POST['qty'] : 1;
                            $username = $_SESSION['name'];
                            $totalprice = $qty * $price;

                            // Use prepared statement to insert transaction into database
                            $sql = "INSERT INTO `order` (name, event_id, eventname, quantity, buy_qty, price, totalprice, status) 
                                    VALUES (?, ?, ?, ?, ?, ?, ?, 'Pending')";
                            $stmt = mysqli_prepare($conn, $sql);

                            if ($stmt) {
                                mysqli_stmt_bind_param($stmt, "sssiidd", $username, $event_id, $eventname, $qty, $buyqty, $price, $totalprice);
                                $result = mysqli_stmt_execute($stmt);

                                if ($result) {
                                    // Fetch status
                                    $statusSql = "SELECT status FROM `order` WHERE name = ? AND event_id = ?";
                                    $statusStmt = mysqli_prepare($conn, $statusSql);
                                    mysqli_stmt_bind_param($statusStmt, "ss", $username, $event_id);
                                    mysqli_stmt_execute($statusStmt);
                                    $statusResult = mysqli_stmt_get_result($statusStmt);
                                    $statusRow = mysqli_fetch_assoc($statusResult);
                                    $status = $statusRow['status'];

                                    // Display order information
                    ?>
                                    <div>
                                        <h6 style='text-decoration: none'><strong>ORDER INFORMATION</strong></h6>
                                        <h6 style='text-decoration: underline'>Item:</h6>
                                    </div>
                                    <div>
                                        <p>Product Name: <?php echo $eventname; ?> <br></p>
                                        <p>Quantity: <?php echo $buyqty; ?> <br></p>
                                        <p>Price: RM<?php echo $price; ?> <br></p>
                                        <p>Total Price: RM<?php echo $totalprice; ?> <br></p>
                                        <p>Status: <?php echo $status; ?><br></p>
                                    </div>

                    <?php
                                    if ($status === 'Approved') {
                                        echo "<div class='content'>";
                                        echo "<a href='admin/img/qrCode.jpg'>Make Payment</a>";
                                        echo "</div>";
                                    } else {
                                        echo "You are not permitted to make payment... <a href='../event1.php'>Back</a>";
                                    }
                                } else {
                                    echo "Error: " . mysqli_error($conn);
                                }
                            } else {
                                echo "Error: Failed to prepare statement";
                            }

                            mysqli_stmt_close($stmt); // Close statement
                        } else {
                            echo "Event details not found in session.";
                        }
                    } else {
                        echo "Checkout button not pressed.";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>