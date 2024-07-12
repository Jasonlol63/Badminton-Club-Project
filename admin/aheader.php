<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <style>
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            /* Set sidebar height to full height of viewport */
            width: 250px;
            padding-top: 3.5rem;
            background-color: #4e73df;
            color: #fff;
            overflow-y: auto;
            /* Enable vertical scrolling */
        }

        .sidebar-brand {
            padding: 1rem 0;
            text-decoration: none;
            color: #fff;
            display: block;
        }

        .sidebar-avatar {
            margin-bottom: 1rem;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            overflow: hidden;
            border: 2px solid #fff;
            margin: 0 auto;
        }

        .sidebar-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .sidebar-welcome {
            font-size: 0.8rem;
            margin-bottom: 1rem;
        }

        .sidebar-nav {
            padding-top: 1rem;
            list-style: none;
            padding-left: 0;
        }

        .nav-item {
            margin-bottom: 0.5rem;
        }

        .nav-link {
            display: block;
            padding: 0.5rem 1rem;
            color: #fff;
            text-decoration: none;
        }

        .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.1);
            color: #fff;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <a href="admin.php" class="sidebar-brand d-flex align-items-center justify-content-center">
            <div class="sidebar-brand-icon">
                <i class="fas fa-cogs"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Admin Panel</div>
        </a>

        <ul class="nav flex-column sidebar-nav">
            <li class="nav-item">
                <a class="nav-link" href="add_event.php">
                    <i class="fas fa-plus"></i>
                    <span>Add New Event</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="add_shopping.php">
                    <i class="fas fa-plus"></i>
                    <span>Add New shopping</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="event_list.php">
                    <i class="fas fa-edit"></i>
                    <span>Edit Existing Event</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="eshopping_list.php">
                    <i class="fas fa-edit"></i>
                    <span>Edit Existing Shopping</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="Viewtrackevent.php">
                    <i class="fas fa-ticket-alt"></i>
                    <span>View & Manage Event Ticket</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="Viewtrackproduct.php">
                    <i class="fas fa-book"></i>
                    <span>View & Manage Product Track</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="admin_profile.php">
                    <i class="fas fa-user"></i>
                    <span>Admin Profile</span>
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="user_list.php">
                    <i class="fas fa-user"></i>
                    <span>User Profile</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="feedback_list.php">
                    <i class="fas fa-user"></i>
                    <span>Feedback List</span>
                </a>
            </li>
            
            <li class="nav-item">
                <?php

                if (isset($_SESSION['adminloggin'])) {
                    echo "
                    <a class='nav-link'  href='login.php'>
                    <i class='fas fa-sign-out-alt'></i>
                    <span>Logout</span></a>";
                } else {
                    echo "
                    <a class='nav-link'  href='login.php'>
                    <i class='fas fa-sign-out-alt'></i>
                    <span>Login</span></a>";
                } ?>
            </li>
        </ul>
    </div>
</body>

</html>