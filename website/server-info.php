<?php include('inc/header.php');?>
<?php include('../server.php');?>
<div class="wrapper">
    <!-- Server Information -->
    <h1>Server Information</h1>
    <?php if($server):?>
        <ul>
        <?php foreach($server as $key => $value):?>
            <li>
            <strong> <?php echo $key;?> : </strong>
            <?php echo $value; ?>
            </li>
        <?php endforeach;?> 
        </ul><br>
    <?php endif;?>

 <!-- Client Information -->
 <h1> Client Information </h1>
    <?php if($client): ?>
    <ul>
        <?php foreach($client as $key =>$value):?>
        <li>
            <strong><?php echo $key?> :</strong>
            <?php echo $value ?>
        </li>
        <?php endforeach;?>
    </ul>
    <?php endif;?>








</div>





<?php include('inc/footer.php');?>