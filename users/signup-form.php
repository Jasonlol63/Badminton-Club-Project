<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup-form.css">
    <title>Sign Up</title>
</head>

<body>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign up</title>
        <link rel="stylesheet" href="signup-form.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    </head>

    <body>
        <div class="container">
            <h2>Sign Up Form</h2>
            <form action="signup-form-process.php" method="post">
                <div>
                    <label for="name">Name</label>
                    <input type="text" name="username" required> <br>
                </div>
                <div>
                    <label for="phone">Phone Number</label>
                    <input type="tel" name="phone" required><br>
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="text" name="email" placeholder="xxx@gmail.com" required>
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="password" name="password" required><br>
                </div>
                <div>
                    <label for="Compass">Confirm Password</label>
                    <input type="password" name="compassword" required><br>
                </div>
                <div class="gender-container">
                    <input type="radio" id="M" name="gender" value="M" required>
                    <label for="M">Male</label>
                </div>
                <div class="gender-container">
                    <input type="radio" id="F" name="gender" value="F" required>
                    <label for="F">Female</label>
                </div>
                <div>
                    <button class="button" type="submit">Submit</button>
                </div>
            </form>

            <a href="../index.php" class="back">Back</a>

        </div>
    </body>

    </html>
</body>

</html>