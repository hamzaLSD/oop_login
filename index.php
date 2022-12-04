<?php

require 'classes.php';

$Register1 = new registration();
if(isset($_POST['form_submit'])){

    $Register1->register($_POST['username'],$_POST['pass']);
    header("location:login.php");

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration</title>
</head>
<body>
    



<form action="" class="" method="post" >

<input type="text" name="username"/> 
<input type="password"  name="pass"/> 
<input type="submit" name="form_submit"/>



    </form>


</body>
</html>