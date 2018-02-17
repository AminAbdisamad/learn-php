<?php 
$msg = '';
$msgcolor = '';
if(filter_has_var(INPUT_POST,'submit')){
    $name = htmlspecialchars ($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars ($_POST['message']);
    if(!empty($name) && !empty($email) && !empty($message)){
        if(filter_var($email,FILTER_VALIDATE_EMAIL) === false){
            //failed
            $msg = 'Email is not VALID';
            $msgcolor = 'alert-danger';
        }else{
            //sending email
            $toEmail = 'theaminux@gmail.com';
            $subject = 'Contact Request Form'.$name;
            $body = '<h2>Contact Form</h2>
            <h4>Name </h4> <p>'.$name.' </p>
            <h4>Email </h4> <p>'.$email.'</p>
            <h4>Message</h4> <p>'.$message.'</p>';
            //email headers
            $headers[] = 'MIME-Version: 1.0'."\r\n";
            $headers[] = 'Content-type: text/html;Charset=UTF-8'."\r\n";
            $headers .= 'From'.$name."<".$email.">"."\r\n";
            if(mail($toEmail,$subject,$body,$headers)) {
                    $msg ='Your Email Has been sent!';
                    $msgcolor ='alert-success';
                    $name = '';
                    $email ='';
                    $message='';
            }else{
                $msg ='Agah! Something went wrong, We couldn\'t sent your email';
                $msgcolor ='alert-danger';

            }

        }
        
    }else{
        $msg = 'Please fill all the fields';
        $msgcolor = 'alert-danger';
    }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href ="https://bootswatch.com/4/cosmo/bootstrap.min.css" type="text/css">
    <title>Contact Form</title>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a href="contact.php"><h1>Asal Solutions</h1></a>
            </div>
        </div>
    </nav>
<!-- contact form -->
<div class="row">
    <div class="col-md-4">
       <div class="container"> 
            <h3>Physical Contacts</h3>
            <h5>Physicall Address: </h5> <address>30 Street Blacksea, Mogadishu </address>
         </div>
    </div>
    <div class="col-md-6"> 
        <form method ="post" action="<?php $_SERVER['PHP_SELF'];?>">
        <?php if($msg !=''): ?>
            <div class="alert <?php echo $msgcolor; ?>">
            <?php echo $msg; ?>
            </div>
        <?php endif; ?>
            <div class="container">
            <h3>Contact Form</h3>
                <div class="form-group">
                    <label>Your Name</label>
                    <input type="text" name ="name"class="form-control"  placeholder="Enter Name" value="<?php echo (isset($_POST['name'])) ? $name : ''; ?>">
                </div>
                <div class="form-group">
                    <label >Email address</label> <!-- aria-describedby="emailHelp"  id="exampleInputEmail1" -->
                    <input type="text" name="email" class="form-control"  placeholder="Enter email" value="<?php echo (isset($_POST['email'])) ? $email : ''; ?>">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label >Message</label>
                    <textarea class="form-control" name="message"  rows="3"><?php echo (isset($_POST['message'])) ? $message : ''; ?></textarea> <!-- -->
                </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>