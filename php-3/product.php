<?php 
    session_start();
    if(isset($_SESSION['username'])) {
        echo "<h3> Hello " .$_SESSION['username']. " Welcome to Product Page</h3>";
        include 'food.php';
        echo " <a href = 'logout.php'><input type='button' value='Logout' name = 'logout'></a>";
    } else {
        echo "<script>location.href='login.php'</script>";
    }
?>