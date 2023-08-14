<!DOCTYPE html>
<html>
<head>
    <title>Change Password</title>
</head>
<body>
    <h1>Change Password</h1>
    <form action="process_change_password.php" method="post">
        <label for="current_password">Current Password:</label>
        <input type="password" name="current_password" required><br>
        <label for="new_password">New Password:</label>
        <input type="password" name="new_password" required><br>
        <label for="reenter_password">Re-enter New Password:</label>
        <input type="password" name="reenter_password" required><br>
        <button type="submit">Change Password</button>
    </form>
</body>
</html>
