<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/5/darkly/bootstrap.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js" integrity="sha512-https://bootswatch.com/5/darkly/_bootswatch.scss==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Events</title>

    <style>
        body {
            background-color: gray;

        }

        .upHead {
            background-color: white;
            font-size: 20px;
        }

        th {
            border: 2px solid black;
            border-radius: 25px;
            text-align: center;
            height: 40px;
            margin: 10px 10px 10px 10px;
            padding: 10px;
            background-color: white;
        }

        td {
            border: 2px solid black;
            border-radius: 15px;
            text-align: center;
            height: 100px;
            margin: 50px 20px 30px 20px;
            padding: 50px;
            width: 300px;
            height: 100px;
            cursor: pointer;
        }

        table {
            border-spacing: 30px;
            padding: 1px;
            width: 100%;
        }

        td:hover {
            background-color: grey;
            text-decoration: none;
        }

        td:link {
            text-decoration: none;
        }

        td:visited {
            text-decoration: none;
        }

        a {
            text-decoration: none;
            color: white;
        }

        .img {
            margin-top: 10px;
            font-size: 30px;
            font-family: Garamond, serif;
        }

        .img img {
            width: 500px;
            height: auto;
            border-radius: 5px;
            background-size: cover;
        }

        th {
            background-color: black;
        }

        .img img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            display: block;
            margin: 0 auto;
        }

        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 20px;
        }

        td {
            text-align: center;
            vertical-align: middle;
            padding: 20px;
            border: 2px solid black;
            border-radius: 15px;
            cursor: pointer;
        }
    </style>
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

    <table class="upHead" style="width:100%">
        <tr>
            <th>Badminton Competition Event</th>
        </tr>
    </table>

    <br><br><br><br><br>

    <table style="width: 100%">
        <tr>
            <?php
            include('connection.php');

            $sql = "SELECT * FROM event";
            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
            ?>
        <tr>
            <td class="img">
                <a href="eventshow.php?event_id=<?php echo $row['event_id'] ?>">
                    <img src="admin/<?php echo $row['image']; ?>" alt="<?php echo $row['eventname']; ?>">
                    <div><?php echo $row['eventname']; ?></div>
                </a>
            </td>
        </tr>
    <?php
            }
    ?>
    <tr>
        <td>Upcoming Events!</td>
    </tr>

    </table>

    <?php

    include('footer.php')

    ?>
</body>

</html>