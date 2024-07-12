
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="login-form.css"> 
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
        <style>
            p{
                justify-content: center;
                display:flex;

            }
        </style>
    </head>

    <body>
        <div class="container">
            <h2>Login Form</h2>
                <form action = "login-process.php" method = 'post'>
                    <div>
                        <label for = "name">Email</label>
                        <input type="text" name="name" placeholder="xxx@gmail.com"><br>
                    </div>
            
                    <div>
                        <label for="name">Password</label>
                        <input type ='password' name = 'password'><br>
                    </div>
                    <div>
                        <button class="button" type="submit">Login</button>
                    </div>
                </form>
    
                
                <a href="forget-password.php" class="forgetpassword">Forget Password</a>
                <a href="signup-form.php" class="signup">Sign Up</a>
                <p>No Account?</p>
                <a href="../index.php" class="home">Back</a>
        </div>
        
    </body>