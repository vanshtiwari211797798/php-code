<?php
session_start();
    // $_SESSION['user']='vansh';
    $_SESSION['pass']='211797';
    // print_r($_SESSION);
    // for delete specific session
    unset($_SESSION['pass']); 
    print_r($_SESSION);
    
    // session_destroy(); //setelte the session using destroy method
    // phpinfo();
?>