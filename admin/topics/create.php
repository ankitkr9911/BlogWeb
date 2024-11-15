<?php include("../../path.php");?>
<?php include(ROOT_PATH . "/app/controllers/topics.php"); 
adminOnly();
?>
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

    <title>Add topic - Admin section</title>
</head>

<body>
    <?php include(ROOT_PATH . "/app/includes/adminHeader.php");?>

    <div class="admin-wrapper">

        <!-- Left sidebar -->
        
        <?php include(ROOT_PATH . "/app/includes/adminSidebar.php");?>
        <!-- Admin content -->
        <div class="admin-content">

            <div class="button-group">
                <a href="create.php" class="btn btn-big">Add Topics</a>
                <a href="index.php" class="btn btn-big">Manage Topics</a>
            </div>

            <div class="content">

                <h2 class="page-title">Add Topic</h2>
                <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

                <form action="create.php" method="post">
                    <div>
                        <label>Name</label>
                        <input type="text" name="name" value="<?php echo $name?>" class="text-input">
                    </div>
                    <div>
                        <label>Description</label>
                        <textarea name="description" id="body"><?php echo $description ?></textarea>
                    </div>
                    <div>
                        <button type="submit" name="add-topic" class="btn btn-big">Add Topic</button>
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