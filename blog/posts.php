<?php
include('./config/config.php');
include('./config/db.php');
if(isset($_POST['delete'])){
    //GET Form Data
    $delete_id = mysqli_real_escape_string($conn,$_POST['delete_id']);
    
    //Insert Data to the Database
    $sql = "DELETE FROM posts WHERE Id = {$delete_id}";
    if(mysqli_query($conn,$sql)){
        header('location: '.ROOT_URL.'');
    }else{
        echo 'ERROR '.mysqli_error($conn);
    }
}

#create id
$id = mysqli_real_escape_string($conn, $_GET['id']);
#query posts table where id= id
$sql = 'SELECT * FROM posts WHERE Id = '.$id;
$query = mysqli_query($conn,$sql);
$post = mysqli_fetch_assoc($query);
mysqli_free_result($query);
mysqli_close($conn);


?>

<!-- HTML starts here -->
<?php include('./inc/header.php')?>
<div class="container">
        <div class="well">
            <!-- Back btn -->
            <div class="row">
                <div class="col s1 right">
                <a  href="<?php echo ROOT_URL?>"><h6>Back</h6></a>
                </div>
            </div>
            
            <h5 class="blue-text"><?php echo $post['title']; ?> </h5>
            <small><?php echo $post['created_at'] ?> by <?php echo $post['author'] ?> </small>
            <p class=""><?php echo $post['body']; ?></p>
            <hr/>
            <div class="row">
                <!-- Edit btn -->
                <div class="col s1 right">
                    <a class="btn-floating btn-large pulse blue" href="<?php echo ROOT_URL?>editpost.php?id=<?php echo $post['Id'];?>">
                    <i class="large material-icons">mode_edit</i>
                    </a>
                </div>
                <!-- Delete btn -->
                <div class="col s1 right">
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                         <input type="hidden" name="delete_id" value="<?php echo $post['Id']?>">
                         <button class="btn-floating btn-large pulse red" type="submit" name="delete" value="delete">
                            <i class="large material-icons">delete</i>
                        </button>
                    </form>
                    
                </div>

            </div>
        </div>
</div>
<?php include('./inc/footer.php')?>
