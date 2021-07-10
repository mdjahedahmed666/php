<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        username : <input type="text" name="username"><br><br>
        password : <input type="password" name="pass"><br><br>
        <input type="submit" value="SUBMIT" name="submit">
    </form>
    <?php 
    
        if(isset($_POST['submit'])) {
           echo "Username: ".$_POST['username']."<br>";
           echo "Password: ".$_POST['pass']; 
        }
    ?>
</body>
</html>