<?php
//header method is used to redirect the page to another page
//header('location:formValidation.php'); - > syntax of header method
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['validate'])){
            if(empty($_POST['name'])){
                header('Location:formValidation.php?nameErr=name is required');
            }
            elseif(empty($_POST['email'])){
                header('Location:formValidation.php?emailErr=email is required');
            }
            elseif(empty($_POST['password'])){
                header('Location:formValidation.php?passwordErr=Password is required');
            }
            if(empty($_POST['name']) && empty($_POST['email']) && empty($_POST['password'])){
                echo "My name is ".$_POST['name']." and my email is ".$_POST['email'] ." and my password is ".$_POST['password'];
            }
    }
}else{
    echo "Please fill the form";
}
?>