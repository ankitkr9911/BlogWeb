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

    <title>Manage users - Admin section</title>
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

                <h2 class="page-title">Manage Users</h2>
                <?php include(ROOT_PATH . "/app/includes/messages.php");?>

                <table>
                    <thead>
                        <th>SN</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th colspan="2">Action</th>
                    </thead>
                    <tbody>
                        <?php foreach ($admin_users as $key => $user): ?>
                            
                            <tr>
                                <td><?php echo $key + 1;?></td>
                                <td><?php echo $user['username'];?></td>
                                <td><?php echo $user['email'];?></td>
                                <td><a href="edit.php?id=<?php echo $user['id']; ?>" class="edit">edit</a></td>
                                <td><a href="index.php?delete_id=<?php echo $user['id'];?>" class="delete">delete</a></td>
                            </tr>
                        <?php endforeach; ?>


                    </tbody>
                    
                </table>

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