<?php
include('./config/config.php');
include('./config/db.php');
if(isset($_POST['submit'])){
    //GET Form Data
    $update_id = mysqli_real_escape_string($conn,$_POST['update_id']);
    $title = mysqli_real_escape_string($conn,$_POST['title']);
    $author = mysqli_real_escape_string($conn,$_POST['author']);
    $body =mysqli_real_escape_string($conn,$_POST['body']);
    //Insert Data to the Database
    $sql= "UPDATE posts SET
                        title = '$title',
                        author = '$author',
                        body = '$body'
                        WHERE Id = {$update_id}";
    
    if(mysqli_query($conn,$sql)){
        header('location: '.ROOT_URL.'');
    }else{
        echo 'ERROR '.mysqli_error($conn);
    }
}
//GET ID
$id = mysqli_real_escape_string($conn, $_GET['id']);

$sql = 'SELECT * FROM posts WHERE Id = '.$id;
$query = mysqli_query($conn,$sql);
$post = mysqli_fetch_assoc($query);
mysqli_free_result($query);
mysqli_close($conn);



?>

<!-- HTML starts here -->
<?php include('./inc/header.php')?>
<div class="container">
    <h5 class="blue-text">Edit Post </h5>
    <div class="row">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"class="col s12">
        <div class="row">
            <!-- Title -->
            <div class="input-field col s6">
                <i class="material-icons prefix">title</i>
                <input id="icon_prefix" type="text" name="title" value="<?php echo $post['title']?>"class="validate" require>
                <label for="icon_prefix">Title</label>
            </div>
             <!-- Author -->
            <div class="input-field col s6">
                <i class="material-icons prefix">account_circle</i>
                <input id="icon_telephone" type="text" name="author" value="<?php echo $post['author']?>"class="validate" require>
                <label for="icon_prefex">Author</label>
            </div>
            <!-- Body -->
        <div class="row">
            <div class="input-field col s12">
                <i class="material-icons prefix">mode_edit</i>
                <textarea id="icon_prefix2" class="materialize-textarea" name="body" require><?php echo $post['body']?></textarea>
                <label for="icon_prefix2">Message</label>
                <input type="hidden" name="update_id" value="<?php echo $post['Id']?>">
            </div>
        </div> <!-- Send -->
        <div class="input-field col s1 right">
            <button class="btn-floating btn-large waves-effect waves-light blue" name="submit" value="submit"><i class="material-icons">add</i></button>
        </div>
        </form>
        </div>
    </div>
</div>
<?php include('./inc/footer.php')?>
