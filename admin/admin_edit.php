<?php
include('aheader.php');
?>

<div class="container-fluid content">
    <form action="admin_edit_process.php" method="post">
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
            <a href="admin_profile.php" class="btn btn-secondary">Back</a>
        </div>
    </form>
</div>
</body>