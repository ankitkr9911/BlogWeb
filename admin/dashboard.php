<?php include("../path.php");?>
<?php include(ROOT_PATH . "/app/controllers/posts.php");
adminOnly(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Custom styling -->
    <link rel="stylesheet" href="../assets/css/style.css">

    <link rel="stylesheet" href="../assets/css/admin.css">

    <title>Document</title>
</head>

<body>
    <?php include(ROOT_PATH . "/app/includes/adminHeader.php");?>

    <div class="admin-wrapper">

        <!-- Left sidebar -->
        
        <?php include(ROOT_PATH . "/app/includes/adminSidebar.php");?>
        <!-- Admin content -->
        <div class="admin-content">

            <div class="content">

                <h2 class="page-title">Dashboard</h2>

                <?php include(ROOT_PATH . '/app/includes/messages.php');?>

               
            </div>


        </div>


    </div>

    <!-- Content -->

    <!-- Footer -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Ckeditor -->
    <!-- <script src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script> -->
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>


    <script src="../assets/js/script.js"></script>
</body>

</html>