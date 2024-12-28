<?php
    if(isset($_GET['id'])){ //getting the id via get method
        $id = $_GET['id']; //store the id in $id name variable
        $conn = mysqli_connect('localhost','root','','crud');
        $sql = "delete from users where id= $id";
        if(mysqli_query($conn, $sql)){
            echo "
                <script>
                    alert('Data Deleted Successfully');
                    window.location.href = 'Read.php';
                </script
                >
            ";
        }else{
            header('Location:Read.php');
        }

    }
?>
<!-- create read and delete operation in contact and Profile date-> name, father, mother, dob, address(textarea) table --> 