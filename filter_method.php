<?php
    // $email ="vishal@gmail.com";
    $id="10a";
    // var_dump(filter_var($email, FILTER_VALIDATE_EMAIL));
    // print_r(filter_var($email, FILTER_VALIDATE_EMAIL)); // FILTER_SENITIZE_STRING // FILTER_SENITIZE_NUMBER_INT / FLOAT
    var_dump(filter_var($id, FILTER_SANITIZE_NUMBER_INT));
    echo isset($_POST['email']) ? $_POST['email'] : '';
?>  
<form action="" method="post">
    <input type="email" name="email" id="email" placeholder="Enter your email">
    <button type="submit">Submit</button>
</form>