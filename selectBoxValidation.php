<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['submit'])){
            if(empty($_POST['answer'])){
                echo "
                    script>
                    alert('Please select your subject');
                    window.location.href='selectBoxValidation.php';
                    </script>
                ";
            }else{
                print_r($_POST['answer']);
            }
           
        }
     }

?>

<form action="" method="post">
    what is  your subject <br> 
    <input type="checkbox" name="answer[]" id="answer" value="html">.html<br>
    <input type="checkbox" name="answer[]" id="answer" value="css">.css<br>
    <input type="checkbox" name="answer[]" id="answer" value="php">.php<br>
    <input type="checkbox" name="answer[]" id="answer" value="js">.js<br>
    
    <input type="submit" value="submit" name="submit">
</form>