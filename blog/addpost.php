<?php
include('./config/config.php');
include('./config/db.php');
if(isset($_POST['submit'])){
    $title = mysqli_real_escape_string($conn,$_POST['title']);
    $author = mysqli_real_escape_string($conn,$_POST['author']);
    $body =mysqli_real_escape_string($conn,$_POST['body']);
    
    $sql = "INSERT INTO posts (title,author,body) VALUES ('$title','$author','$body')";
    if(mysqli_query($conn,$sql)){
        header('location: '.ROOT_URL.'');
    }else{
        echo 'ERROR '.mysqli_error($conn);
    }
}



?>

<!-- HTML starts here -->
<?php include('./inc/header.php')?>

<div class="container">
<!-- <div style="background:red;color:white;height:30px;"><p style="text-align:center">Oops! something went wrong</p></div> -->
    <h5 class="blue-text">Add Post </h5>
    <div class="row">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"class="col s12">
        <div class="row">
            <!-- Title -->
            <div class="input-field col s6">
                <i class="material-icons prefix">title</i>
                <input id="icon_prefix" type="text" name="title" class="validate" require>
                <label for="icon_prefix">Title</label>
            </div>
             <!-- Author -->
            <div class="input-field col s6">
                <i class="material-icons prefix">account_circle</i>
                <input id="icon_telephone" type="text" name="author"class="validate" require>
                <label for="icon_telephone">Author</label>
            </div>
            <!-- Body -->
        <div class="row">
            <div class="input-field col s12">
                <i class="material-icons prefix">mode_edit</i>
                <textarea id="icon_prefix2" class="materialize-textarea" name="body" require></textarea>
                <label for="icon_prefix2">Message</label>
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
