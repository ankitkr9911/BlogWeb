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

    <title>Manage topics - Admin section</title>
</head>

<body>
    <?php include(ROOT_PATH . "/app/includes/adminHeader.php");?>

    <div class="admin-wrapper">

        <!-- Left sidebar -->
        
        <?php include(ROOT_PATH . "/app/includes/adminSidebar.php");?>
        <!-- Admin content -->
        <div class="admin-content">

            <div class="button-group">
                <a href="create.php" class="btn btn-big">Add Topic</a>
                <a href="index.php" class="btn btn-big">Manage Topics</a>
            </div>

            <div class="content">

                <h2 class="page-title">Manage Topics</h2>
                <?php include(ROOT_PATH . "/app/includes/messages.php");?>

                <table>
                    <thead>
                        <th>SN</th>
                        <th>Name</th>
                        <th colspan="2">Action</th>
                    <tbody>
                        <?php foreach ($topics as $key => $topic): ?>
                            <tr>
                                <td><?php echo $key + 1;?></td>
                                <td><?php echo $topic['name'];?></td>
                                <td><a href="edit.php?id=<?php echo $topic['id'];?>" class="edit">edit</a></td>
                                <td><a href="index.php?del_id=<?php echo $topic['id'];?>" class="delete">delete</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    </thead>
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