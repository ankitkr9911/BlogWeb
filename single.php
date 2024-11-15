<?php include("path.php"); ?>
<?php include(ROOT_PATH . '/app/controllers/posts.php');

if(isset($_GET['id'])){
    $post = selectOne('posts',['id' => $_GET['id']]);
}

$topics = selectAll('topics');
$posts = selectAll('posts',['published' => 1]);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Custom styling -->
    <link rel="stylesheet" href="assets\css\style.css">

    <title><?php echo $post['title'];?> | BlogWeb</title>
</head>

<body>
<?php include(ROOT_PATH . "/app/includes/header.php");?>


    <div class="page-wrapper">

        <!-- Content -->
        <div class="content clearfix">

            <!-- Main Content Wrapper -->
            <div class="main-content-wrapper">
                <div class="main-content single">

                    <h1 class="post-title"><?php echo $post['title'];?></h1>
                    <div class="post-content">

                        <?php echo html_entity_decode($post['body']);?>
          
                    </div>
                </div>
            </div>

            <div class="sidebar single">

                <div class="section popular">
                    <h2 class="section-title">Popular</h2>

                    <?php foreach ($posts as $p):?>

                        <div class="post clearfix">
                            <img src="<?php echo BASE_URL . '/assets/images/' . $p['image'];?>"  alt="">
                            <a href="#" class="title">
                                <h4><?php echo $p['title'];?></h4>
                            </a>
                        </div>

                    <?php endforeach;?>                

                   

                </div>

                <div class="section topics">
                    <h2 class="section-title">Topics</h2>
                    <ul>
                        <?php foreach($topics as $topic):?>

                            <li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name'] ?>"><?php echo $topic['name'];?></a></li>

                        <?php endforeach; ?>
                        
                    </ul>
                </div>
            </div>

        </div>
    </div>


    <!-- Footer -->

    <?php include(ROOT_PATH . "/app/includes/footer.php");?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="assets/js/script.js"></script>
</body>

</html>