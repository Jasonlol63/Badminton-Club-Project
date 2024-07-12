

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login-form.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h2>Forget Password</h2>
        <form action='' method='post'>
            <div>
                <label for="email">Email</label>
                <input type='text' name='email' placeholder="xxx@gmail.com" required><br>
            </div>
            <div>
                <label for="verify">Verify Code</label>
                <input type="text" name="verification_code" placeholder="123456" />

            </div>
            <div>
                <button class="button" type="submit">Submit</button>
            </div>
        </form>

        <a href="login.php" class="back">Back</a>    
    </div>

</body>
</html>