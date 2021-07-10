<?php 
    $username = "admin";
    $pass = "admin";


    session_start();
    if(isset($_SESSION['username'])) {
        echo "<h3> Hello ". $_SESSION['username']." </h3>";
        echo "<a href='product.php'>Product</a><br>";
        echo " <a href = 'logout.php'><input type='button' value='Logout' name = 'logout'></a>";
        
    } else {
        if(isset($_POST['username'])) {
            if($_POST['username'] == $username && $_POST['pass'] == $pass) {
                $_SESSION['username'] = $username;
                echo "<script>location.href='home.php'</script>";
    
            } else {
               echo "<script>alert('Incorrect username or password')</script>";
               echo "<script>location.href='login.php'</script>";
            }
        } else {
            echo "<script>alert('Dont access from URL')</script>";
            echo "<script>location.href='login.php'</script>";
        }
       
    }

?>