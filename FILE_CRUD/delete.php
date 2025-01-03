<?php
       $conn = mysqli_connect('localhost', 'root', '', 'file_uploading');
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $sql = "delete from file where id=$id";
        if(mysqli_query($conn, $sql)){
            echo "
            <script>
                alert('Data Deleted successfully');
                window.location.href='read.php';
            </script>
        ";
        }
    }
?>