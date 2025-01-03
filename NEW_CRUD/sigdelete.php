<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $conn = mysqli_connect('localhost', 'root', '', 'new_crud');
        $sql = "delete from single where id=$id";
        if(mysqli_query($conn, $sql)){
            echo "
                <script>
                    alert('Deleted successfully');
                    window.location.href='sigread.php';
                </script>
            ";
        }
    }else{
        header('Location:sigread.php');
    }
?>