<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fc;
        }

        .container {
            max-width: 600px;
            padding: 40px;
            margin: 100px auto;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2,
        h3 {
            color: #4e73df;
        }

        label {
            font-weight: bold;
        }

        .btn-container {
            text-align: right;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="userAccedit-process.php" method="post">
            <h2>Contact Information</h2>
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number:</label>
                <input type="tel" class="form-control" id="phone" name="phone">
            </div>

            <div class="mb-3">
                <label for="gender" class="form-label">Gender : (M/F)</label>
                <input type="text" class="form-control" id="gender" name="gender">
            </div>

            <hr>

            <div class="mb-3">
                <label for="address" class="form-label">Address:</label>
                <input type="address" class="form-control" id="email" name="address">
            </div>

            <div class="mb-3">
                <label for="country" class="form-label">Country:</label>
                <input type="text" class="form-control" id="country" name="country">
            </div>

            <div class="mb-3">
                <label for="state" class="form-label">State:</label>
                <input type="text" class="form-control" id="state" name="state">
            </div>

            <div class="mb-3">
                <label for="region" class="form-label">Region:</label>
                <input type="text" class="form-control" id="region" name="region">
            </div>

            <div class="mb-3">
                <label for="postcode" class="form-label">Postcode:</label>
                <input type="number" class="form-control" id="postcode" name="postcode">
            </div>

            <hr>

            <h2>Change Password</h2>
            <div class="mb-3">
                <label for="currentPassword" class="form-label">Current Password:</label>
                <input type="password" class="form-control" id="currentPassword" name="currentPassword">
            </div>

            <div class="mb-3">
                <label for="newPassword" class="form-label">New Password:</label>
                <input type="password" class="form-control" id="newPassword" name="newPassword">
            </div>

            <div class="mb-3">
                <label for="confirmPassword" class="form-label">Confirm New Password:</label>
                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword">
            </div>

            <div class="btn-container">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
                <a href="user_list.php" class="btn btn-secondary">Back</a>
            </div>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>