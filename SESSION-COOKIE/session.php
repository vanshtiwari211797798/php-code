<?php
    session_start();
    $_SESSION['users']='Vansh';
    $_SESSION['pass']='211797';
    // print_r($_SESSION);
    // print_r($_SESSION['pass']);

    // form of array (Default time at 24 minutes)
    // $_SESSION['users']=['vansh','2117977'];
    print_r($_SESSION);
  
    
?>




<!-- session storage setup in javascript -->
<!-- <script>
    sessionStorage.setItem('vansh','211797798')
    sessionStorage.removeItem('vansh')
</script> -->