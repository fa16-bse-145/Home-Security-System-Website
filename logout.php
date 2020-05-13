<?php session_start(); ?>

<?php

$_SESSION['username'] = null; //cancel session
$_SESSION['password'] = null;



if(!isset($_SESSION['username'])){

header("Location: index.php");
    
} else {
    
    echo "session still on";
}


?>