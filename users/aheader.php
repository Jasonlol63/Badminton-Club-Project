<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/5/darkly/bootstrap.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js" integrity="sha512-https://bootswatch.com/5/darkly/_bootswatch.scss==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="userAccount.css">
    <title>My Account</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-light" data-bs-theme="light">
            <div class="container-fluid">
                <a class="navbar-brand" href="../index2.php">Badminton Inspired All</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarColor03">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="../index2.php">HOME
                                <span class="visually-hidden">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../event1.php">EVENTS</a>
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

    <h3>
        <bold>MY ACCOUNT</bold>
    </h3>

    <section class="container-navigation">
        <h4>ACCOUNT NAVIGATION</h4>
        <div>
            <a href="userAccount.php" class="my-account">MY ACCOUNT</a>
        </div>
        <div>
            <a href="order_his.php" class="order-history">ORDER HISTORY</a>
        </div>
        <div>
            <a href="../event_checkout.php" class="order-history">EVENTS HISTORY</a>
        </div>
        <div>
            <a href="../index2.php" class="logout">BACK</a>
        </div>
    </section>