<?php 
include('configDB.php') ?>
<!DOCTYPE html>
<html>

<head>
    <title>Please register</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="header">
        <h2>Register form</h2>
    </div>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <?php include('errors.php'); 
        ?>
        <div class="input-group">
            <label>First Name</label>
            <input type="last_name" name="first_name">
        </div>
        <div class="input-group">
            <label>Last Name</label>
            <input type="last_name" name="last_name">
        </div>
        <div class="input-group">
            <label>Username</label>
            <input type="username" name="username">
        </div>
        <div class="input-group">
            <label>Email</label>
            <input type="email" name="email">
        </div>
        <div class="input-group">
            <label>Phone</label>
            <input type="phone" name="phone">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password_1">
        </div>
        <div class="input-group">
            <label>Confirm password</label>
            <input type="password" name="password_2">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="reg_user">Register</button>
        </div>
        <p>
            Already a member? <a href="login.php">Sign in</a>
        </p>
    </form>
</body>

</html>