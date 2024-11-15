<?php include("../../path.php");?>
<?php include(ROOT_PATH . "/app/controllers/users.php");
adminOnly();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Custom styling -->
    <link rel="stylesheet" href="../../assets/css/style.css">

    <link rel="stylesheet" href="../../assets/css/admin.css">

    <title>Update user - Admin section</title>
</head>

<body>
    <?php include(ROOT_PATH . "/app/includes/adminHeader.php");?>

    <div class="admin-wrapper">

        <!-- Left sidebar -->
        
        <?php include(ROOT_PATH . "/app/includes/adminSidebar.php");?>
        <!-- Admin content -->
        <div class="admin-content">

            <div class="button-group">
                <a href="create.php" class="btn btn-big">Add User</a>
                <a href="index.php" class="btn btn-big">Manage Users</a>
            </div>

            <div class="content">

                <h2 class="page-title">Edit User</h2>
                <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

                <form action="edit.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $id;?>">
                    <div>
                        <label>Username</label>
                        <input type="text" name="username" value="<?php echo $username;?>" class="text-input">
                    </div>
                    <div>
                        <label>Email</label>
                        <input type="email" name="email" value="<?php echo $email;?>" class="text-input">
                    </div>
                    <div>
                        <label>Password</label>
                        <input type="password" name="password" value="<?php echo $password;?>" class="text-input">
                    </div>
                    <div>
                        <label>Password Confirmation</label>
                        <input type="password" name="passwordConf" value="<?php echo $passwordConf;?>" class="text-input">
                    </div>
                    <div>
                        <?php if(isset($admin) && $admin == 1 ):?>
                            <label>
                                <input checked type="checkbox" name="admin">
                                Admin
                            </label>
                        <?php else:?>
                            <label>
                                <input type="checkbox" name="admin">
                                Admin
                            </label>
                        <?php endif;?>
                                   
                    </div>
                    <div>
                        <button type="submit" name="update-user" class="btn btn-big">Update User</button>
                    </div>
                </form>
            </div>


        </div>


    </div>

    <!-- Content -->

    <!-- Footer -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Ckeditor -->
    <!-- <script src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script> -->
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>


    <script src="../../assets/js/script.js"></script>
</body>

</html>