<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/5/darkly/bootstrap.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js" integrity="sha512-https://bootswatch.com/5/darkly/_bootswatch.scss==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="shopping.css">
    <title>Shopping page</title>
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
                </div>
                </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-sm-2" type="search" placeholder="Search">
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </header>

    <div class="slider">
        <div class="slides">
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">

            <div class="slide first">
                <img src="admin/img/shoes.jpg" alt="">
            </div>
            <div class="slide">
                <img src="admin/img/red nike.jpg" alt="">
            </div>
            <div class="slide">
                <img src="admin/img/blue nike.jpg" alt="">
            </div>
            <div class="slide">
                <img src="admin/img/green nike.jpg" alt="">
            </div>

            <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
            </div>
        </div>

        <div class="navigation-manual">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>
        </div>
    </div>

    <section id="products" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Shop Badminton Essentials</h2>
            <div class="row">
                <?php
                if (isset($_SESSION['loggin'])) {
                    include('connection.php');
                    $sql = "SELECT * FROM product";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $prodname = $row['prod_name'];
                            $image = $row['image'];
                            $price = $row['price'];
                            $product_id = $row['prod_id'];
                ?>
                            <div class="col-md-4 mb-4">
                                <div class="card h-100">
                                    <img src="admin/<?php echo $image; ?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $prodname; ?></h5>
                                        <p class="card-text">RM<?php echo $price; ?></p>
                                        <a href="cart.php?product_id=<?php echo $product_id; ?>" class="btn btn-primary">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                <?php
                        }
                    }
                } else {
                    // Handle not logged in state
                    echo '<div class="col-md-12 text-center">
                            <p>Please login to view products</p>
                          </div>';
                }
                ?>
            </div>
        </div>
    </section>

    <script type="text/javascript">
        var counter = 1;
        setInterval(function() {
            document.getElementById('radio' + counter).checked = true;
            counter++
            if (counter > 4) {
                counter = 1;
            }
        }, 5000);
    </script>

</body>

</html>