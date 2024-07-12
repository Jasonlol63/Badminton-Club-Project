<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Badminton Competition Events</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/darkly/bootstrap.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js" integrity="sha512-https://bootswatch.com/5/darkly/_bootswatch.scss==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #36454F;
        }

        header {
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1000;
        }

        .contain {
            width: 80%;
            margin: 20px auto;
            background-color: black;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: black;
        }

        .competition {
            border-bottom: 1px solid lightblue;
            padding: 10px 0;
            display: flex;
        }

        .competition h2 {
            margin: 0;
            color: blue;
        }

        .competition p {
            margin: 5px 0;
        }

        .competition img {
            width: 100px;
            margin-right: 20px;
        }

        .register {
            text-align: center;
            margin-top: 20px;
        }

        .register button:hover {
            background-color: red;
        }

        .register button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: blue;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>

<body>


    <header>
        <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Badminton Inspired All</a>
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
            </div>
        </nav>
    </header>

    <div class="contain">
        <h1>Badminton Competition Events</h1>
        <div class="competition">
            <img src="admin/img/tarumt.jpg" alt="School Competition">
            <div>
                <h2>School Competition</h2>
                <p>Date: April 1, 2024</p>
                <p>Location: Sport Complex Kolej TARUMT</p>
                <p>Type: School-level</p>
            </div>
        </div>
        <div class="competition">
            <img src="admin/img/area.jpg" alt="Area Competition">
            <div>
                <h2>Area Competition</h2>
                <p>Date: May 10, 2024</p>
                <p>Location: City Sports Complex</p>
                <p>Type: Area-level</p>
            </div>
        </div>
        <div class="competition">
            <img src="admin/img/state.jpg" alt="State Competition">
            <div>
                <h2>State Competition</h2>
                <p>Date: July 20, 2024</p>
                <p>Location: State Badminton Stadium</p>
                <p>Type: State-level</p>
            </div>
        </div>
        <div class="competition">
            <img src="admin/img/national.jpg" alt="National Competition">
            <div>
                <h2>National Competition</h2>
                <p>Date: December 10-12, 2024</p>
                <p>Location: National Badminton Stadium</p>
                <p>Type: National-level</p>
            </div>
        </div>
        <div class="competition">
            <img src="admin/img/tarumt.jpg" alt="Friendly Match">
            <div>
                <h2>Friendly Match</h2>
                <p>Date: Every Friday</p>
                <p>Location: Sport Complex Kolej TARUMT</p>
                <p>Type: Friendly</p>
            </div>
        </div>
        <div class="register">
            <form action="" method="post">
                <a href="users/signup-form.php">Register</a>
            </form>
        </div>
    </div>


</body>

</html>