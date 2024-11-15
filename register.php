<?php include("path.php");?>
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

    <title>Register</title>
</head>

<body>

<?php include(ROOT_PATH . "/app/includes/header.php");?>

    <div class="auth-content">
        <form action="register.php" method="post">
            <h2 class="form-title">Register</h2> 

            <?php include(ROOT_PATH . "/app/helpers/formErrors.php");?>
            
            <div>
                <label>Username</label>
                <input type="text" name="username" class="text-input" value="<?php echo $username; ?>">
            </div>
            <div>
                <label>Email</label>
                <input type="email" name="email" class="text-input" value="<?php echo $email; ?>">
            </div>
            <div>
                <label>Password</label>
                <input type="password" name="password" class="text-input" value="<?php echo $password; ?>">
            </div>
            <div>
                <label>Password Confirmation</label>
                <input type="password" name="passwordConf" class="text-input" value="<?php echo $passwordConf; ?>">
            </div>
            <div>
                <button type="submit" name="register-btn" class="btn btn-big">Register</button>
            </div>
            <p> Or <a href="<?php echo BASE_URL . '/login.php' ?>">Sign In</a></p>
        </form>
    </div>
   

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="assets/js/script.js"></script>
</body>

</html>