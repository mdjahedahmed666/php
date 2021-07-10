<?php 
    $usr = "admin";
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";

    echo $_GET['username']."<br>";
    echo $_GET['pass'];
    
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";

    echo $_POST['username']."<br>";
    echo $_POST['pass'];

    echo "<pre>";
    print_r($_REQUEST);
    echo "</pre>";

    echo $_REQUEST['username']."<br>";
    echo $_REQUEST['pass'];

    echo "<pre>";
    print_r($_SERVER);
    echo "</pre>"
?>