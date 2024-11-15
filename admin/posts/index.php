<?php include("../../path.php");?>
<?php include(ROOT_PATH . "/app/controllers/posts.php"); 
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

    <title>Manage posts - Admin section</title>
</head>

<body>
    <?php include(ROOT_PATH . "/app/includes/adminHeader.php");?>

    <div class="admin-wrapper">

        <!-- Left sidebar -->
        
        <?php include(ROOT_PATH . "/app/includes/adminSidebar.php");?>
        <!-- Admin content -->
        <div class="admin-content">

            <div class="button-group">
            <a href="create.php" class="btn btn-big">Add Post</a>
            <a href="index.php" class="btn btn-big">Manage Posts</a>
            </div>

            <div class="content">

                <h2 class="page-title">Manage Posts</h2>
                <?php include(ROOT_PATH . "/app/includes/messages.php");?>

                <table>
                    <thead>
                        <th>SN</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th colspan="3">Action</th>
                    <tbody>
                        <?php foreach($posts as $key => $post): ?>

                            <tr>
                                <td><?php echo $key + 1; ?></td>
                                <td><?php echo $post['title'] ?></td>
                                <td>Munshi Premchand</td>
                                <td><a href="edit.php?id=<?php echo $post['id'];?>" class="edit">edit</a></td>
                                <td><a href="edit.php?delete_id=<?php echo $post['id'];?>" class="delete">delete</a></td>

                                <?php if($post['published']):?>
                                    <td><a href="edit.php?published=0&p_id=<?php echo $post['id']?>" class="unpublish">unpublish</a></td>

                                <?php else:?>
                                    <td><a href="edit.php?published=1&p_id=<?php echo $post['id']?>" class="publish">publish</a></td>
                                <?php endif;?>
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