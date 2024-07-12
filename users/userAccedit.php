<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="userAccedit.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js" integrity="sha512-https://bootswatch.com/5/darkly/_bootswatch.scss==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://bootswatch.com/5/darkly/bootstrap.css">
    <title>Edit User</title>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="../index2.php">Badminton Inspired All</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarColor02">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="../index2.php">HOME
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



    <form action="userAccedit-process.php" class="address-form" method="post">
        <div class="name0">
            <h3>CONTACT INFORMATION</h3>
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name"><br>

            <label for="name">Email*:</label><br>
            <input type="text" id="name" name="email"><br>

            <label for="name">PhoneNo:</label><br>
            <input type="tel" id="name" name="phone"><br>
        </div>

        <br></br>
        <br></br>
        <br></br>
        <br></br>
        <br></br>

        <div class="change-password-form">
            <h3>CHANGE PASSWORD</h3>
            <label for="currentPassword">Current Password:</label><br>
            <input type="password" id="currentPassword" name="currentPassword"><br>
            <label for="newPassword">New Password:</label><br>
            <input type="password" id="newPassword" name="newPassword"><br>
            <label for="confirmPassword">Confirm Password:</label><br>
            <input type="password" id="confirmPassword" name="confirmPassword"><br>
        </div>

        <div class=btn>
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
        </div>
    </form>

    <?php

    include('../footer.php')

    ?>

</body>

</html>