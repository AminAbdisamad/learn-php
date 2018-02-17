<?php
include('./config/config.php');
include('./config/db.php');
//select data from the table
$sql = 'SELECT * FROM posts ORDER BY created_at DESC';
//sql query 
$query = mysqli_query($conn,$sql);
//fetch all 
$posts = mysqli_fetch_all($query,MYSQLI_ASSOC);
//mysqli_fetch_all($result,MYSQLI_ASSOC);

mysqli_free_result($query);
mysqli_close($conn);
?>

<!-- HTML Starts here -->
<?php include('./inc/header.php') ?>
<div class="container">
    <?php foreach($posts as $post ) : ?>
        <div class="card">
            <div class="card-content">
                <h5 class="blue-text"><?php echo $post['title'];?></h5>
                <small><?php echo $post['created_at'];?> by <?php echo $post['author'];?></small>
                 <p class="truncate"><?php echo $post['body'];?></p>
            </div>
           
            <ul class="tabs">
                <li class="tab">
                    <a target="_self" href="<?php echo ROOT_URL;?>posts.php?id=<?php echo $post['Id']?>">Read More </a>
                </li>
             
            </ul>
        </div>    
        
    <?php endforeach; ?>
</div>
<?php include('./inc/footer.php') ?>

