<?php
$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
$err = mysqli_connect_errno();
echo ($err) ? 'Couldn\'t connect to the Database'.$err : '';

