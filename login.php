<?php include("path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php"); 
guestsOnly();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Custom styling -->
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Login</title>
</head>

<body>

<?php include(ROOT_PATH . "/app/includes/header.php");?>

    <div class="auth-content">
        <form action="login.php" method="post">
            <h2 class="form-title">Login</h2>

            <?php include(ROOT_PATH . "/app/helpers/formErrors.php");?>
            <div>
                <label>Username</label>
                <input type="text" name="username" value="<?php echo $username;?>" class="text-input">
            </div>
            <div>
                <label>Password</label>
                <input type="password" name="password" value="<?php echo $password;?>"class="text-input">
            </div>
            <div>
                <button type="submit" name="login-btn" class="btn btn-big">Login</button>
            </div>
            <p> Or <a href="<?php echo BASE_URL .'/register.php' ?>">Sign Up</a></p>
        </form>
    </div>
   

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="assets/js/script.js"></script>
</body>

</html>