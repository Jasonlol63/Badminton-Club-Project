<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="login.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

</head>

<body>
    <div class="container">
        <h2>Login Form</h2>
        <form action="login-process.php" method="post">
            <div>
                <label for="name">Admin ID</label>
                <input type="text" name="ID">
            </div>

            <div>
                <label for="name">Password</label>
                <input type="password" name="password">
            </div>

            <div>
                <button class="button" type="submit">Login</button>
            </div>
        </form>

    </div>

</body>

</html>