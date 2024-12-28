<?php 
    $id = $_GET['id'];
    if(isset($id)){
        $conn = mysqli_connect('localhost','root','','crud1');
        $sql = "delete from profile where id = $id";
        echo mysqli_query($conn, $sql);
        if(mysqli_query($conn, $sql)){
            echo "
                <script>
                    alert('Deleted successfully');
                    window.location.href = 'read.php';
                </script>
            ";
        }else{
            echo mysqli_error($conn);
        }
    }   
?>