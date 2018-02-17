<?php
/** 
 * Planning : 
 * 1. create a search form which has user input and and suggestions label
 * 2. onkeyup event we'll call a suggestions function with the input value
 * 3. the suggestion label will have an id of outline to manipulate from the js 
 * 4. will make ajax request 
 * 5. create the php page to request
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search From</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.min.css" type="text/css">
    
</head>
<body>
<div class="container">
    <h2>Search Users </h2>
    <form>
        <input class="form-control" placeholder="Enter User" onkeyup="showSuggestion(this.value)">
        <p>Suggestion: <span id="output"></span></p>
    </form>
</div> 
<script src="main.js"></script>
</body>
</html>