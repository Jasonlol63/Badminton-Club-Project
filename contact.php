<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="contact.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://bootswatch.com/5/darkly/bootstrap.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js" integrity="sha512-https://bootswatch.com/5/darkly/_bootswatch.scss==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://bootswatch.com/5/darkly/bootstrap.css">
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

    <section class="contact-section">
        <div class="container">
            <h2>Get in Touch</h2>
            <p>Have questions or feedback? We'd love to hear from you!</p>
            <form class="contact-form" action="contact_feedback.php" method="post">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="username">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="useremail">
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="5"></textarea>
                </div>
                <button type="submit" class="submit-btn">Send Message</button>
            </form>
        </div>
    </section>

    <section id="contactUs" class="section">
        <div class="container">
            <!-- Your contact us content here -->
        </div>
        <a href="chat.php" class="chat-icon">Chat with us!</a>
    </section>

    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 Badminton Society. All rights reserved.</p>
            <p>Contact Us!</p>
            <p>email@example.com</p>
            <p>Phone: 011-123-4126</p>
        </div>
        <div class="social-media">
            <a href="#"><img src="insta.jpg" alt="Instagram"></a>
            <a href="#"><img src="twitter.jpg" alt="Twitter"></a>
        </div>
        <div class="address">
            <p>Jalan Genting Kelang, Setapak, 53300 Kuala Lumpur,</p>
            <p> Federal Territory of Kuala Lumpur</p>
        </div>
    </footer>
</body>

</html>