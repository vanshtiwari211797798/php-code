<?php
    // $email ="vishal@gmail.com";
    // $id="10a";
    // var_dump(filter_var($email, FILTER_VALIDATE_EMAIL)); //FILTER_VALIDATE_EMAIL,FILTER_VALIDATE_URL
    // print_r(filter_var($email, FILTER_VALIDATE_EMAIL)); // FILTER_SENITIZE_STRING // FILTER_SENITIZE_NUMBER_INT / FLOAT
    // var_dump(filter_var($id, FILTER_SANITIZE_NUMBER_INT));
    // echo isset($_POST['email']) ? $_POST['email'] : '';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
        if(empty($email)){
            echo "Email is required";
        }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "Please Enter Valid Email";
        }else{
            echo "Form Submitted Successfully";
        }
    }
    // json_encode(); // json_decode();
    // json_decode()// json format to php object / array (associative array) convert
?>  
<form action="" method="post">
    <input type="email" name="email" id="email" placeholder="Enter your email">
    <button type="submit">Submit</button>
</form>