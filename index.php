<?php 
include("path.php");
include(ROOT_PATH . "/app/controllers/topics.php"); 

$posts = array();
$postsTitle = "Recent Posts";

if(isset($_GET['t_id'])){
    $posts = getPostsByTopicId($_GET['t_id']);
    $postsTitle = "You searched for posts under '" . $_GET['name'] . "'";
}else if(isset($_POST['search-term'])){
    $postsTitle = "You searched for '" . $_POST['search-term'] . "'";
    $posts = searchPosts($_POST['search-term']);
}else{
    $posts = getPublishedPosts();
}

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

    <title>BlogWeb</title>
</head>

<body>
    <?php include(ROOT_PATH . "/app/includes/header.php");?>
    <?php include(ROOT_PATH . "/app/includes/messages.php");?>

   



    <div class="page-wrapper">
        <div class="post-slider">
            <h1 class="slider-title">Trending Posts</h1>
            <i class="fas fa-chevron-left prev"></i>
            <i class="fas fa-chevron-right next"></i>

            <div class="post-wrapper">

                <?php foreach($posts as $post):?>

                    <div class="post">
                        <img src="<?php echo BASE_URL . '/assets/images/' . $post['image'];?>" alt="" class="slider-image">
                        <div class="post-info">
                            <h4><a href="single.php?id=<?php echo $post['id'];?>"><?php echo $post['title'];?></a></h4>
                            <i class="far fa-user"></i><span><?php echo $post['username'];?></span>
                            &nbsp;
                            <i class="far fa-calendar"></i><span><?php echo date('F j,Y',strtotime($post['created_at'])); ?></span>
                        </div>
                    </div>

                <?php endforeach;?>


            </div>
        </div>
    </div>

    <!-- Content -->
    <div class="content clearfix">

        <!-- Main Content -->
        <div class="main-content">
            <h1 class="recent-post-title"><?php echo $postsTitle ?></h1>

            <?php foreach($posts as $post):?>

                <div class="post clearfix">
                    <img src="<?php echo BASE_URL . '/assets/images/' . $post['image'];?>" alt="" class="post-image">
                    <div class="post-preview">
                        <h1><a href="single.php?id=<?php echo $post['id'];?>"><?php echo $post['title'];?></a></h1>
                        <i class="far fa-user"></i><span><?php echo $post['username'];?></span>
                        &nbsp;
                        <i class="far fa-calendar"></i><span><?php echo date('F j,Y',strtotime($post['created_at'])); ?></span>
                        <p class="preview-text">
                            <?php echo html_entity_decode(substr($post['body'],0,150) . '...');?>
                        </p>
                        <a href="single.php?id=<?php echo $post['id'];?>" class="btn read-more">Read More</a>
                    </div>
                </div>

            <?php endforeach;?>


        </div>

        <div class="sidebar">

            <div class="section search">
                <h2 class="section-title">Search</h2>
                <form action="index.php" method="post">
                    <input type="text" name="search-term" class="text-input" placeholder="Search...">
                </form>
            </div>

            <div class="section topics">
                <h2 class="section-title">Topics</h2>
                <ul>
                <?php foreach ($topics as $key => $topic): ?>        
                    <li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name'] ?>"><?php echo $topic['name'];?></a></li>
                <?php endforeach; ?>
                    
                </ul>
            </div>

        </div>
    </div>

    <!-- Footer -->
    <?php include(ROOT_PATH . "/app/includes/footer.php");?>
   

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="assets/js/script.js"></script>
    <script src="assets/js/script2.js"></script>
</body>

</html>