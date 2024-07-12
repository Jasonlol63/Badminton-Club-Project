<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup-form.css">
    <title>Address Sign Up</title>
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
            <form action="userAddress-process.php" method="post">
                <div>
                    <label for="name">Address</label>
                    <input type="text" name="address" placeholder="1, Jalan Mutiara, Taman Mutiara" require> <br>
                </div>
                <div>
                    <label for="country">Country</label>
                    <input type="text" name="country" placeholder="Malaysia" require ><br>
                </div>
                <div>
                    <label for="region">Region</label>
                    <input type="text" name="region" placeholder="Kuala Lumpur" require ><br>
                </div>
                <div>
                    <label for="region">State</label>
                    <input type="text" name="state" placeholder="Setapak" require ><br>
                </div>
                <div>
                    <label for="code">Postcode</label>
                    <input type="text" name="postcode" placeholder="53300" require ><br>
                </div>
                <div>
                    <button class="button" type="submit">Submit</button>
                </div>
            </form>

            <a href="../index2.php" class="back">Back</a>

        </div>
    </body>

    </html>
</body>

</html>