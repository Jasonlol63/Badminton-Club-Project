<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="cart.css">
    <link rel="stylesheet" href="https://bootswatch.com/5/darkly/bootstrap.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js" integrity="sha512-https://bootswatch.com/5/darkly/_bootswatch.scss==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index2.php">Badminton Inspired All</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarColor02">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="index2.php">HOME
                                <span class="visually-hidden">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="event1.php">EVENTS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">CONTACT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="shopping.php">SHOPPING</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Welcome</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="users/userAccount.php">View Account</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php">Logout</a>
                            </div>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-sm-2" type="search" placeholder="Search">
                        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <div class="cart-container">
        <div class='cart-item1'>
            <h2>Cart Info :</h2>
        </div>
        <?php
        include('connection.php');

        if (isset($_GET['event_id'])) {
            $event_id = $_GET['event_id'];

            $sql = "SELECT * FROM event WHERE event_id='" . $event_id . "'";
            $result = mysqli_query($conn, $sql);

            if ($row = mysqli_fetch_assoc($result)) {
                $_SESSION['eventid'] = $row['event_id'];
                $_SESSION['eventname'] = $row['eventname'];
                $_SESSION['price'] = $row['price'];
                $_SESSION['qty'] = $row['quantity'];
        ?>
                <div class='cart-item'>
                    <img src="admin/<?php echo $row['image']; ?>" alt="" width="10%">
                    <h6><?php echo $row['eventname']; ?></h6>
                    <button class="input-group-text-decrement-btn">-</button>
                    <input type="text" name="quantity" value="1" class="quantity-input">
                    <input type="hidden" name="qty" value="1" id="hidden-quantity">
                    <button class="input-group-text-increment-btn">+</button>
                    <h6>RM<?php echo $row['price']; ?></h6>
                </div>

                <script>
                    $('.input-group-text-increment-btn').click(function() {
                        console.log("Increment button clicked");
                        var inputElement = $(this).siblings('.quantity-input');
                        var currentValue = parseInt(inputElement.val());
                        inputElement.val(currentValue + 1);
                        $('#hidden-quantity').val(currentValue + 1); // Update the value of the hidden input field
                    });

                    $('.input-group-text-decrement-btn').click(function() {
                        console.log("Decrement button clicked");
                        var inputElement = $(this).siblings('.quantity-input');
                        var currentValue = parseInt(inputElement.val());
                        if (currentValue > 1) {
                            inputElement.val(currentValue - 1);
                            $('#hidden-quantity').val(currentValue - 1); // Update the value of the hidden input field
                        }
                    });
                </script>
        <?php
            } else {
                echo "Event Not Found ! ! !";
            }
        } else {
            echo "No Event ID provided";
        }
        ?>

        <div class="form-group">
            <form id="checkoutForm" action="event_checkout.php" method="post">
                <div class="form-group">
                    <label for="description">Description:</label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="Customer Comment">
                </div>
                <div class='cart-item-link'>
                    <a href="shopping.php">Back</a>
                    <button type="submit" id="checkoutButton" name="checkoutButton" class="btn btn-primary">Check Out</button>
                </div>
            </form>
        </div>

        <script>
            document.getElementById('checkoutButton').addEventListener('click', function() {
                // Redirect to order_his.php
                window.location.href = 'event_checkout.php';
            });
        </script>
    </div>

    <footer>
        <?php
        include('footer.php');
        ?>
    </footer>
</body>

</html>