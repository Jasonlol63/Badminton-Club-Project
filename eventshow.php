<?php
include('connection.php');

if (isset($_GET['event_id'])) {
    $event_id = $_GET['event_id'];
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://bootswatch.com/5/darkly/bootstrap.css">
        <link rel="stylesheet" href="showevent.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js" integrity="sha512-https://bootswatch.com/5/darkly/_bootswatch.scss==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <title>School Event</title>

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
                                <?php
                                session_start();
                                if (isset($_SESSION['loggin'])) {
                                    echo '<a class="nav-link active" href="index2.php">HOME
                    <span class="visually-hidden">(current)</span>
                    </a>';
                                } else {
                                    echo '<a class="nav-link active" href="index.php">HOME
                    <span class="visually-hidden">(current)</span>
                    </a>';
                                }
                                ?>
                            </li>
                            <li class="nav-item">
                                <?php
                                if (isset($_SESSION['loggin'])) {
                                    echo '<a class="nav-link" href="event1.php">EVENTS</a>';
                                } else {
                                    echo '<a class="nav-link" href="event.php">EVENTS</a>';
                                }
                                ?>
                            </li>
                            <li class="nav-item">
                                <?php
                                if (isset($_SESSION['loggin'])) {
                                    echo '<a class="nav-link" href="contact.php">CONTACT</a>';
                                } else {
                                }
                                ?>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="shopping.php">SHOPPING</a>
                            </li>
                            <li class="nav-item dropdown">
                                <?php
                                if (isset($_SESSION['loggin'])) {
                                    echo '<a class="nav-link" href="logout.php">LOGOUT</a>';
                                } else {
                                    echo '<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">USER LOGIN</a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="users/login.php">Login</a>
                          <a class="dropdown-item" href="users/signup-form.php">Register</a>
                        </div>';
                                }
                                ?>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="event_cart.php?event_id=<?php echo $event_id ?>">
                                    <img src="admin/img/shoppingcart.jpg" alt="Cart">
                                    <span class="cart-badge">0 </span>
                                </a>
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

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <?php

                    $sql = "SELECT * FROM event WHERE event_id='" . $event_id . "'";
                    $result = mysqli_query($conn, $sql);

                    if ($row = mysqli_fetch_assoc($result)) {
                        $_SESSION['eventid'] = $row['event_id'];
                        $_SESSION['eventname'] = $row['eventname'];
                        $_SESSION['price'] = $row['price'];
                        $_SESSION['qty'] = $row['quantity'];
                    ?>
                        <div class="event-container">
                            <img src=admin/<?php echo $row['image'] ?> class="img-fluid">
                        </div>
                </div>

                <div class="col-md-6">
                    <div class="event-details">
                        <h2><?php echo $row['eventname'] ?></h2>
                        <p><strong>Price:</strong> RM<?php echo $row['price'] ?></p>
                        <p><strong>Date:</strong> <?php echo $row['date'] ?></p>
                        <p><strong>Time:</strong> <?php echo $row['time'] . '-' . $row['time_end'] ?></p>
                        <p><strong>Location:</strong><?php echo $row['location'] ?></p>
                        <p><strong>Context:</strong></p>
                        <p><?php echo $row['context'] ?></p>
                        <button type="submit" class="btn btn-primary add-to-cart-btn">Add to Cart</button>
                        <a href="event1.php">Back</a>
                    </div>

                    <script>
                        $(document).ready(function() {
                            $(".add-to-cart-btn").click(function() {
                                var event_id = $(this).data("event-id");
                                $.ajax({
                                    type: "POST",
                                    url: "event_cart.php",
                                    data: {
                                        event_id: event_id
                                    },
                                    success: function(response) {
                                        // Update cart badge
                                        var currentCount = parseInt($(".cart-badge").text());
                                        var newCount = currentCount + 1;
                                        $(".cart-badge").text(newCount);
                                    }
                                });
                            });
                        });
                    </script>
                </div>
            </div>
    <?php
                    }
                } else {
                    echo "Event Not Found ! ! !";
                }
    ?>
        </div>


        <?php

        include('footer.php');

        ?>

    </body>

    </html>