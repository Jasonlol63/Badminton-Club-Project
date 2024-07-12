<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home page</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://bootswatch.com/5/darkly/bootstrap.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js" integrity="sha512-https://bootswatch.com/5/darkly/_bootswatch.scss==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <style>
    header {
      position: fixed;
      width: 100%;
      top: 0;
      left: 0;
      z-index: 1000;
    }

    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    .wrapper {
      flex: 1;
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

  <div class="slider">
    <div class="slides">

      <input type="radio" name="radio-btn" id="radio1">
      <input type="radio" name="radio-btn" id="radio2">
      <input type="radio" name="radio-btn" id="radio3">
      <input type="radio" name="radio-btn" id="radio4">

      <div class="slide first">
        <img src="admin/img/aboutUs.jpg" alt="">
      </div>
      <div class="slide">
        <img src="admin/img/badminton.png" alt="">
      </div>
      <div class="slide">
        <img src="admin/img/event.png" alt="">
      </div>
      <div class="slide">
        <img src="admin/img/signup2.jpg" alt="">
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

  <div class="wrapper">
    <div class="about-section">
      <img class="aboutUsImg" src="admin/img/aboutUs.jpg" alt="">
      <div class="text-box">
        <h2>About Us</h2>
        <p>Welcome to the Badminton Society! We are passionate about badminton and promote the sport through various activities and events.Our society is dedicated to providing opportunities for players of all skill levels to participate, improve, and enjoy the game of badminton.</p>
        <h1>Our Vision</h1>
        <p>We ought to strive more than just a game of badminton, we wish to spread sportmanship, kindness and more importantly friendship that created during time of hardship.</p>
      </div>
    </div>

    <br></br>


    <div class="event-section">
      <img class="eventImg" src="admin/img/event.png" alt="">
      <div class="text-box">
        <h2>Upcoming Events</h2>
        <p>Stay tuned for updates on our upcoming events!</p>
        <?php
        if (isset($_SESSION['loggin'])) {
          echo '<a href="event1.php" class="event-btn">View Events</a>';
        } else {
          echo '<a href="event.php" class="event-btn">View Events</a>';
        }
        ?>
      </div>
    </div>
  </div>

  <div class="signUp-section">
    <img class="signUpImg" src="admin/img/shoes.jpg" alt="">
    <div class="text-box">
      <h2>Shop Now!</h2>
      <p>We are proud to introduced our shopping experience brought to you!</p>
      <a href="shopping.php" class="signup-btn">Shopping!</a>
    </div>
  </div>

  <?php

  include('footer.php')

  ?>

</body>

</html>