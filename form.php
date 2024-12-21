<?php
    // print_r($_SERVER['PHP_SELF']);
    print_r($_REQUEST); //it will print the data of the form in the array format
    // $_GET //it contains the data of the form in the array format
?>


<form action="second.php" method="post"> 

        <label for="first">Name</label>
        <input type="text" name="name" id="first">
        <label for="phone">Phone</label>
        <input type="text" name="phone" id="phone">
        <input type="submit" value="submit">
        
</form>