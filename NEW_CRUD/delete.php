<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $conn = mysqli_connect('localhost', 'root', '', 'new_crud');
        $sql = "delete from users where id=$id";
        if(mysqli_query($conn, $sql)){
            echo "
                <script>
                    alert('Deleted successfully');
                    window.location.href='read.php';
                </script>
            ";
        }
    }else{
        header('Location:read.php');
    }
?>