<?php
    // make a input field when we enter the value then print the table of the number
    $table = $_POST['table'];
    for($i=1; $i<=10; $i++){
        echo $table . " * " . $i . " = " . $table*$i . "<br>";
    }
    

    
?>
<form action="" method="post">
    <label for="table">Enter the number</label>
    <input type="text" name="table" id="table">
    <input type="submit" value="submit">
</form>