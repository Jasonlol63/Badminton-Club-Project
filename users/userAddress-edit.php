<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js" integrity="sha512-https://bootswatch.com/5/darkly/_bootswatch.scss==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://bootswatch.com/5/darkly/bootstrap.css">
    <link rel="stylesheet" href="userAddress-edit.css">
    <title>Edit</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarColor02">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="../index.php">HOME
                                <span class="visually-hidden">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../event.php">EVENTS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../contact.php">CONTACT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../shopping.php">SHOPPING</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../logout.php">LOGOUT</a>
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



    <section class="container-navigation">
        <h4>ACCOUNT NAVIGATION</h4>
        <div>
            <a href="userAccount.php" class="my-account">MY ACCOUNT</a>
        </div>
        <div>
            <a href="order_his.php" class="order-history">ORDER HISTORY</a>
        </div>
        <div>
            <a href="userAccount.php" class="logout">BACK</a>
        </div>
    </section>

    <form action="userAddress-edit-process.php" class="address-form" method="post">
        <h3>ADDRESS</h3>
        <div class="street-address">
            <label for="streetAddress">Street Address*</label><br>
            <input type="text" id="streetAddress" name="address">
            <br></br>
        </div>

        <div class="country">
            <label for="countryName">Country*</label><br>
            <input type="text" id="countryName" name="country">
        </div>

        <div class="city-place">
            <label for="city">City*</label><br>
            <input type="text" id="city" name="city" placeholder="Beijing">
        </div>

        <div class="state-province">
            <label for="state">State/Province</label><br>
            <input type="text" id="state" name="state">
        </div>

        <div class="zip">
            <label for="zip/postalcode">PostCode*</label><br>
            <input type="text" id="zip/postalcode" name="postcode">
        </div>

        <div class=btn>
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
        </div>
    </form>

    <footer>
    <?php
    include('../footer.php')
    ?>
    </footer>

</body>

</html>