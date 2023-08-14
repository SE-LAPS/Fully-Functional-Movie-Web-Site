<!DOCTYPE html>
<html>
<head>
    <title>Sign In</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" media="all" href="SigninStyles.css">
</head>
<body>
    <div>
        <form action="register.php" method="post" id="main">
            <h2>Create your account</h2>

            <div class="input-parent">
                <label for="f_name">First Name</label>
                <input type="text" id="f_name" name="f_name">
            </div>
            
            <div class="input-parent">
                <label for="l_name">Last Name</label>
                <input type="text" id="l_name" name="l_name">
            </div>
            
            <div class="input-parent">
                <label for="email">Email</label>
                <input type="text" id="email" name="email">
            </div>

            <div class="input-parent">
                <label for="password">Password</label>
                <input type="password" id="password" name="password">
            </div>
            
            <div class="input-parent">
                <label for="role">Select Role</label>
                <select id="role" name="role">
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
            </div>

            <button type="submit">Sign Up</button>
        </form>
    </div>
</body>
</html>
