<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['validate'])){
            if(empty($_POST['name'])){
                header('Location:radioSelectValidation.php?nameErr=name is required');
            }
            elseif(empty($_POST['email'])){
                header('Location:radioSelectValidation.php?emailErr=email is required');
            }
            elseif(empty($_POST['password'])){
                header('Location:radioSelectValidation.php?passwordErr=Password is required');
            }
            if(empty($_POST['name']) && empty($_POST['email']) && empty($_POST['password'])){
                echo "My name is ".$_POST['name']." and my email is ".$_POST['email'] ." and my password is ".$_POST['password'];
            }
?>